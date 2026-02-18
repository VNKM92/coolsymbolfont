<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Blog;


class FrontBlogController extends Controller
{


     public function showData(Request $request, $slug){
            
            // dd('he');
            $data = Blog::where('slug',$slug)->first();
            $page = 'Blog';
            return view('frontend.blog.show', compact('page','data'));
        }
}
