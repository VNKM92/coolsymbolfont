<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class PreventBackHistory
{
    use Exportable;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    
    public function handle($request, Closure $next)
    {

          //  <!-- This is use for login back stop -->

            // $response = $next($request);
            // return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            //     ->header('Pragma','no-cache')
            //     ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
            


         //  <!-- This is use for export csv or excel file download  -->
         
        $response = $next($request);
        $response->headers->set('Access-Control-Allow-Origin' , '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');
        
        return $response;
    }
}
