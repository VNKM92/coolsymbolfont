<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\AdminDocUpload;
use App\Models\AdminDocHistory;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use DB;
use Session;
use Spatie\Activitylog\Models\Activity;
use Carbon\Carbon;

class AdminDocUploadController extends Controller
{
    
    
    public $user;
    function __construct()
    {
        //  $this->middleware('permission:report', ['only' => ['index','store']]);
         $this->middleware('permission:report', ['only' => ['report','report']]);
         

         $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('web')->user();
            return $next($request);
        });

        // $this->__construct($orientation,$unit,$format);
    }

    
    public function index(){
        $userid = Auth::id();
		$data = AdminDocUpload::orderBy('id','DESC')->get();

		$active = 'Document';
        $page = 'Docs';
        return view('backend.documentManagement.index', compact('page','data'));
    }


	
	/* Admin agency create form funcation start */
	 public function add(Request $request){

        if (is_null($this->user) || !$this->user->can('report')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
        }

        $page = 'Agency';
        return view('backend.documentManagement.add', compact('page'));
    }

    public function addnew(Request $request){
        if (is_null($this->user) || !$this->user->can('report')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
        }
        $page = 'Agency';
        return view('backend.documentManagement.form', compact('page'));
    }

    public function insert(Request $request){
        if (is_null($this->user) || !$this->user->can('report')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
        }
        if($request->isMethod('post'))
        {
                $user_id = Auth::id();
                $data = $request->all();
                $validatedData = $request->validate
                ([	
                    'title' => 'required',
                    'document' => 'required',
                    // 'comment' => 'required',
                    // 'ed' => 'required',
                ]);
                
            $data_details = new AdminDocUpload;
            $data_details->title	    = $data['title'];
            $data_details->comment	= $data['comment'];
            
            if($data_details->save()){
                $files = $request->file('document');
                $dataset = $request->all();
                $i = 0;
                if($request->hasfile('document')) {
                    foreach ($request->file('document') as $file) {
                        // $name = time().$file->getClientOriginalExtension();
                        // $name = time().$file->getClientOriginalName(); get original name of document
                        $name = time() . $i . '.' . $file->getClientOriginalExtension();
                        $path = $file->move(public_path() . '/backend/admindocument/', $name);

                        $shipment_doc = new AdminDocHistory;	
                        $shipment_doc->doc_id = $data_details->id;;
                        $shipment_doc->user_id = $user_id;
                        $shipment_doc->title = $dataset['title'];
                        $shipment_doc->document =  $name;
                        $shipment_docSave = $shipment_doc->save();
                        $i++;
                    }
                }

                return redirect('/admin/doc/upload/data')->with('success','Data added successfully');
            }else{
                return redirect('/admin/doc/upload/data')->with('errors','Try Again');
            }

        $page = 'Document';
        return view('backend.documentManagement.add', compact('page'));
        }	
    }

    public function edit(Request $request, $id){
        if (is_null($this->user) || !$this->user->can('report')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
        }
		$user_id= Auth::id();
        $idi =  $id;
        $details = AdminDocUpload::where('id',$idi)->first();

		if($request->isMethod('post')){
		    $data = $request->all();
        
            
            $this->validate($request,[
                'document'=>'required',
            ]); 

            $details->title	    = $data['title'];
            $details->comment	= $data['comment'];
            // $details->ed     	= $data['ed'];
            $files = $request->file('document');
            

            if($details->save()){
                $data = $request->all();

                $iddata = Auth::id();

                $files = $request->file('document');
                $dataset = $request->all();
                $i = 0;
                if($request->hasfile('document')) {
                    foreach ($request->file('document') as $file) {
                        // $name = time().$file->getClientOriginalExtension();
                        $name = time() . $i . '.' . $file->getClientOriginalExtension();
                        $path = $file->move(public_path() . '/backend/admindocument/', $name);
                        $shipment_doc = new AdminDocHistory;	
                        $shipment_doc->doc_id = $details->id;;
                        $shipment_doc->user_id = $user_id;
                        $shipment_doc->title = $dataset['title'];
                        $shipment_doc->document =  $name;
                        $shipment_docSave = $shipment_doc->save();
                        $i++;
                    }
                }

                return redirect('/admin/doc/upload/data')->with('success','Data added successfully');
            }else{
                return redirect('/admin/doc/upload/data')->with('errors','Try Again');
            }
			}
			
            
        // $id =  base64_encode($id);
        $page = 'Document';
        return view('backend.documentManagement.edit', compact('page','details','id'));
            	
	}

    public function view(Request $request, $id){
		$user_id= Auth::id();
        $idi =  $id;
        $details = AdminDocUpload::where('id',$idi)->first();
			
        // $id =  base64_encode($id);
        $page = 'Document';
        return view('backend.documentManagement.view', compact('page','details','id'));
            	
	}


        public function delete($id){
            $del = AdminDocUpload::where('id',$id)->update(['deleted_at'=> date('Y-m-d h:i:s')]);
            if ($del)
            {
                return redirect()->back()->with('success','Data deleted successfully');
            }
            else
            {
                return redirect()->back()->with('errors','Pls. Try Again');
            }
        }
        
}
