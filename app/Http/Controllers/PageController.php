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
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{

    public function index(Request $request){
            $data = Page::latest()->get();
            $page = 'Page';
            return view('backend.page.index', compact('page','data'));
        
    }



        public function showData(Request $request, $slug){
            
            // dd('he');
            $data = Page::where('slug',$slug)->first();
            $page = 'Page';
            return view('frontend.page.show', compact('page','data'));
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
            
                    $imdbdata =                 new Page;
                    $imdbdata->title             = $data['title'] ?? "";
                    $imdbdata->slug             = Str::slug($data['title'] ?? "", "-") ;
                    $imdbdata->scriptads      = $data['scriptads'] ?? "";
                    $imdbdata->discription      = $data['description'] ?? "";
                    
                    $imdbdata->posturl          = $data['posturl'] ?? "";
                    $imdbdata->publish          = $data['publish'] ?? "";
                    $imdbdata->metatitle        = $data['metatitle'] ?? "";
                    $imdbdata->metadiscription  = $data['metadiscription'] ?? "";
                    // $imdbdata->focuskeyword     = $data['focuskeyword'] ?? "";
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
                    $file->move(public_path().'/backend/movie/Page/',$name);
                    $datavk[] = $name;
                    //save data in database with diffrent name with comma
                    $imdbdata->image  = implode(",",$datavk);
                    $i++;
                }
            }

            if($imdbdata->save()){
                return redirect('/admin/page/add')->with('success','Page added successfully');
            } else {
                return redirect('/admin/page/add')->with('errors',COMMON_ERROR);
            }
        }
        $page = 'Page';
        return view('backend.page.form', compact('page'));
    }
    
    

    public function edit(Request $request, $id){

        $data  = Page::where('id', $id)->first();
        if($request->isMethod('post')){
            $company_id = Auth::id();
            $data = $request->all();
             $imdbdata = Page::where('id', $id)->first();

            // $imdbdata = new Blog;
            $imdbdata->title             = $data['title'] ?? "";
            $imdbdata->slug             = Str::slug($data['title'] ?? "", "-") ;
            $imdbdata->scriptads      = $data['scriptads'] ?? "";
            $imdbdata->discription      = $data['description'] ?? "";
            $imdbdata->posturl          = $data['posturl'] ?? "";
            $imdbdata->publish          = $data['publish'] ?? "";
            $imdbdata->metatitle        = $data['metatitle'] ?? "";
            $imdbdata->metadiscription  = $data['metadiscription'] ?? "";
            // $imdbdata->focuskeyword     = $data['focuskeyword'] ?? "";
            
            
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
                
                return redirect('/admin/page')->with('success','Data updated successfully');
            } else {
                return redirect('/admin/page')->with('errors',COMMON_ERROR);
            }
        }
        $page = 'Page';
        return view('backend.page.edit', compact('page','data','id'));
        
    }

    public function delete(Request $request, $id){
        $data  = Page::where('id', $id)->delete();
        $page = 'page';
        return redirect()->back()->with('success', 'your data deleted successfuly');   
        
    }

 
}

