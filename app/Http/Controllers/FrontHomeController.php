<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Post;
use App\Models\Page;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
class FrontHomeController extends Controller
{
    
  

     public function showData(Request $request, $slug){
            // dd('he');
            $data = Post::where('slug',$slug)->first();
            
           // dd($data );    Route::redirect('/old-user-profile/{id}', '/new-user-profile/{id}', 301);
           if(empty($data)){
               
               return redirect('/');
                
           }
            
            $item1 =  Post::pluck('slug','title');
            $item  = Post::select('slug', 'title')->get();
             //dd($item );
            $page = 'Post';
            return view('frontend.post.index', compact('page','data','item'));
        }


        public function pageshowData(Request $request, $slug){
            // dd('he');
            $data = Page::where('slug',$slug)->first();
            $page = 'Post';
            return view('frontend.page.index', compact('page','data'));
        }


         public function blogshowData(Request $request, $slug){
            // dd('he');
            $data = Blog::where('slug',$slug)->first();
            $page = 'Post';
            
            return view('frontend.blog.show', compact('page','data'));
        }


        public function allblogshowData(Request $request){
              
            $data = Blog::get();
            $page = 'Blog';
            
            return view('frontend.blog.allshow', compact('page','data'));
        }

        public function feed(){
            $posts = Post::where('publish', 1)->latest()->get();
            $collection = collect($posts);
            $posts = $collection->unique('slug');
            $posts->values()->all();
            //$posts =  MovieHome::orderBy('id','desc')->distinct('imdbid')->get();
            return response()->view('rss',compact('posts'))->header('Content-Type', 'text/xml');
        }


        public function sitemap(){
            $posts = Post::where('publish', 1)->latest()->get();
            return response()->view('sitemap', [
                'posts' => $posts
            ])->header('Content-Type', 'text/xml');
        }
        
        

        

}
