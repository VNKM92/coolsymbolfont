<?php

namespace App\Http\Controllers\backend\movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\MovieHome;
use App\Models\Blog;
use App\Models\Movie;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index(Request $request){
            $data = Blog::latest()->get();
            $page = 'Movie';
            return view('backend.movie.blog.index', compact('page','data'));
        
    }



        public function showData(Request $request, $slug){
            
            // dd('he');
            $data = Blog::where('slug',$slug)->first();
            $page = 'Blog';
            return view('frontend.blog.show', compact('page','data'));
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
            
                    $imdbdata =                 new Blog;
                    $imdbdata->title             = $data['title'] ?? "";
                    $imdbdata->slug             = Str::slug($data['title'] ?? "", "-") ;
                    $imdbdata->description      = $data['description'] ?? "";
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
                    $file->move(public_path().'/backend/movie/blog/',$name);
                    $datavk[] = $name;
                    //save data in database with diffrent name with comma
                    $imdbdata->image  = implode(",",$datavk);
                    $i++;
                }
            }

            if($imdbdata->save()){
                return redirect('/admin/blog/add')->with('success','blog added successfully');
            } else {
                return redirect('/admin/blog/add')->with('errors',COMMON_ERROR);
            }
        }
        $page = 'blog';
        return view('backend.movie.blog.form', compact('page'));
    }
    
    

    public function edit(Request $request, $id){

        $data  = Blog::where('id', $id)->first();
        if($request->isMethod('post')){
            $company_id = Auth::id();
            $data = $request->all();
             $imdbdata = Blog::where('id', $id)->first();

            // $imdbdata = new Blog;
            $imdbdata->title             = $data['title'] ?? "";
            $imdbdata->slug             = Str::slug($data['title'] ?? "", "-") ;
            $imdbdata->description      = $data['description'] ?? "";
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
                    $file->move(public_path().'/backend/movie/blog/',$name);
                    $datavk[] = $name;
                    //save data in database with diffrent name with comma
                    $imdbdata->image  = implode(",",$datavk);
                    $i++;
                }
            }
            

            if($imdbdata->save()){
                
                return redirect('/admin/blog')->with('success','Data updated successfully');
            } else {
                return redirect('/admin/blog')->with('errors',COMMON_ERROR);
            }
        }
        $page = 'Blog';
        return view('backend.movie.blog.edit', compact('page','data','id'));
        
    }

    public function delete(Request $request, $id){
        $data  = Blog::where('id', $id)->delete();
        $page = 'Blog';
        return redirect()->back()->with('success', 'your data deleted successfuly');   
        
    }

 
}
