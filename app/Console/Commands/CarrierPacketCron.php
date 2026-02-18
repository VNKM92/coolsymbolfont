<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CarrierPacketCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'carrierpacket:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(){
		

			// this is for lovepdf editor start
				$lpdf_auth= \DB::table('love_pdfs')->first();
				$curl = curl_init();
				curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://api.ilovepdf.com/v1/auth',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS =>'{
					"public_key": "'.$lpdf_auth->admin_token.'"
				}',
				CURLOPT_HTTPHEADER => array(
					'Content-Type: application/json',
					'Authorization: Bearer null',
					'Cookie: _csrf=PcoA7HYsOqLUX_qVCibf7Uc5pI0WCfVY'
				),
				));
				
				$lpdf_user= \DB::table('love_pdfs')->first();

				$response = curl_exec($curl);
				curl_close($curl);
				// echo $response;
				$resp = json_decode($response);
				if(!empty($resp)){
					$datupdate = DB::update('update love_pdfs set auth_access_token =? where id = ?',[ $resp->access_token, $lpdf_user->id ]);
				}
			// this is for lovepdf editor end
				



        	$packet_user = \DB::table('mycarrier_packets')->first();
			$data= json_decode( json_encode($packet_user), true);
			$access= 'grant_type=password&username='.$packet_user->user_name.'&password='.$packet_user->password;
		
			$curl = curl_init();
			curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.mycarrierpackets.com/token",// your preferred link
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_TIMEOUT => 30000,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => $access,
			CURLOPT_HTTPHEADER => array(
			// Set Here Your Requesred Headers
			'Content-Type: application/x-www-form-urlencoded'
			),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			$res = json_decode($response);
			if(!empty($res)){
				$datupdate = DB::update('update mycarrier_packets set token =? where id = ?',[ $res->access_token, $packet_user->id ]);
			}

			\Log::info("CarrierPacket acceess token genrated!");
    }
}
