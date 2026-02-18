<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class HomeDashboardController extends Controller
{
    
    
    
    public function welcome(Request $request){
        
        return view('frontend.home');

    }

    public function starsymbol(Request $request){
        
        return view('frontend.cat.starsymbol');

    }



    public function heartsymbol(Request $request){
        
        return view('frontend.cat.heartsymbol');

    }



    public function checkmarksymbol(Request $request){
        
        return view('frontend.cat.checkmarksymbol');

    }


    public function textanimalsymbol(Request $request){
        
        return view('frontend.cat.textanimalsymbol');

    }



    public function sunsymbol(Request $request){
        
        return view('frontend.cat.sunsymbol');

    }



    public function moonsymbol(Request $request){
        
        return view('frontend.cat.moonsymbol');

    }


    public function advancedtextanalyzer(Request $request){
        
        return view('frontend.font.advancedtextanalyzer');

    }


    public function fancytextgenerator(Request $request){
        
        return view('frontend.font.fancytextgenerator');

    }

    
    



    
}
