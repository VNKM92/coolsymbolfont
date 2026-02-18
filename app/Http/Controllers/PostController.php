<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\MovieHome;
use App\Models\Blog;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index(Request $request){
            $data = Post::latest()->get();
            $page = 'Post';
            return view('backend.post.index', compact('page','data'));
        
    }



        public function showData(Request $request, $slug){
            
            // dd('he');
            $data = Post::where('slug',$slug)->first();
            $page = 'Post';
            return view('frontend.post.show', compact('page','data'));
        }

    


    public function add(Request $request){
        if($request->isMethod('post')){
            $company_id = Auth::id();
            $data = $request->all();

            // dd($data);
            $validatedData = $request->validate
            ([
                // 'ip_address' => 'required|max:255|unique:ip_checkers'
                // |regex:/(^[a-zA-Z]+[a-zA-Z0-9\\-]*$)/u
            ]);
            
                    $imdbdata =                 new Post;
                    $imdbdata->subheading             = $data['subheading'] ?? "";
                    $imdbdata->title             = $data['title'] ?? "";
                    $imdbdata->slug             = Str::slug($data['title'] ?? "", "-") ;
                    $imdbdata->discription      = $data['description'] ?? "";
                    $imdbdata->scriptads        = $data['scriptads'] ?? "";
                    $imdbdata->content           = $data['content'] ?? "";
                    $imdbdata->posturl          = $data['posturl'] ?? "";
                    $imdbdata->publish          = $data['publish'] ?? "";
                    $imdbdata->metatitle        = $data['metatitle'] ?? "";
                    $imdbdata->metadiscription  = $data['metadiscription'] ?? "";
                    $imdbdata->focuskeyword     = $data['focuskeyword'] ?? "";
                    // $imdbdata->save();
            
            // $imdbdata->save();

            $files = $request->file('image');
            //upload multipal file one row diffrent name with seprate comma
            $i = 0;
            if($request->hasfile('image')){
                foreach ($files as $file) {                   
                    // $name = $file->getClientOriginalName();
                    //with $i help you save diffrent name file
                    $name = time() . $i . '.' . $file->getClientOriginalExtension();
                    //movie file in folder location
                    $file->move(public_path().'/backend/movie/post/',$name);
                    $datavk[] = $name;
                    //save data in database with diffrent name with comma
                    $imdbdata->image  = implode(",",$datavk);
                    $i++;
                }
            }

            if($imdbdata->save()){
                return redirect('/admin/post/add')->with('success','post added successfully');
            } else {
                return redirect('/admin/post/add')->with('errors',COMMON_ERROR);
            }
        }
        $page = 'post';
        return view('backend.post.form', compact('page'));
    }
    
    

    public function edit(Request $request, $id){

        $data  = Post::where('id', $id)->first();
        if($request->isMethod('post')){
            $company_id = Auth::id();
            $data = $request->all();
             $imdbdata = Post::where('id', $id)->first();

            // $imdbdata = new Blog;
            $imdbdata->subheading             = $data['subheading'] ?? "";
            $imdbdata->title             = $data['title'] ?? "";
            $imdbdata->slug             = Str::slug($data['title'] ?? "", "-") ;
            $imdbdata->discription      = $data['description'] ?? "";
             $imdbdata->scriptads        = $data['scriptads'] ?? "";
             $imdbdata->content           = $data['content'] ?? "";

            $imdbdata->posturl          = $data['posturl'] ?? "";
            $imdbdata->publish          = $data['publish'] ?? "";
            $imdbdata->metatitle        = $data['metatitle'] ?? "";
            $imdbdata->metadiscription  = $data['metadiscription'] ?? "";
            $imdbdata->focuskeyword     = $data['focuskeyword'] ?? "";
            
            
            $files = $request->file('image');
            //upload multipal file one row diffrent name with seprate comma
            $i = 0;
            if($request->hasfile('image')){
                foreach ($files as $file) {                   
                    // $name = $file->getClientOriginalName();
                    //with $i help you save diffrent name file
                    $name = time() . $i . '.' . $file->getClientOriginalExtension();
                    //movie file in folder location
                    $file->move(public_path().'/backend/movie/post/',$name);
                    $datavk[] = $name;
                    //save data in database with diffrent name with comma
                    $imdbdata->image  = implode(",",$datavk);
                    $i++;
                }
            }
            

            if($imdbdata->save()){
                
                return redirect('/admin/post')->with('success','Data updated successfully');
            } else {
                return redirect('/admin/post')->with('errors',COMMON_ERROR);
            }
        }
        $page = 'post';
        return view('backend.post.edit', compact('page','data','id'));
        
    }

    public function delete(Request $request, $id){
        $data  = Post::where('id', $id)->delete();
        $page = 'post';
        return redirect()->back()->with('success', 'your data deleted successfuly');   
        
    }

 
}
