<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Load;
use App\Models\Shipment;
use App\Models\Company;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Artisan;
use DB;
use Session;
use Spatie\Activitylog\Models\Activity;
use Jenssegers\Agent\Agent;
use App\Models\LoadActivity;
use App\Models\CarrierPayment;
use App\Models\AccountsPayable;
use App\Models\AssignAcPayable;
use App\Models\Carrier_account;
use App\Models\Clockin;
use App\Models\ClockinInfo;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index(){
    //     return view('backend.dashboard');
    // }
    
   
 
    public function index(){
        $userid = Auth::id();
        $user_id =User::where('id', $userid)->first();
        $uid = $user_id->status ;
        
        $tloads = 0;
        $tusers = 0;
        //dd($uid);
        if ($uid == 0) {
                Session::flush();
                Artisan::call('view:clear');
                throw ValidationException::withMessages(['email' => 'User account has been deactivated.']);
                return redirect()->back()->with('status','User account has been deactivated.');
                
           // $this->route('login');
        }else{
            $tusers = DB::table('users')->count();
            return view('backend.dashboard', compact('tusers'  
            ));
        }
    }

    public function userPasswordRest(Request $request){
        // $response = [];
        // if($request->isMethod('post')){
            $data = $request->all();
            print_r($data);die;

            return view('passwordrest',compact());

    }

    public function handleChart()
    {
        $loadDatagraph = Load::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
          
        return view('backend.dashboard', compact('loadDatagraph'));

    }
 
 


}
