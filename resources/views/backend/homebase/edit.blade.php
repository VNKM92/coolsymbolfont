@extends('backend.layouts.master')
@section('title','Blog Edit')
@section('content')
<style>
    .ck.ck-editor__main {
    color: gray;
}

    .j-wrapper1 {
        /* margin: 0 auto; */
        margin: none !important; 
    }
</style>


{{-- start --}}
<div class="page-wrapper">
			<div class="page-content">
              
				<ul class="nav nav-tabs">
                    @can('shipper-all')
                     
                    
                        <li class="all_leave active"><a href="{{url('/admin/homebase')}}" data-toggle="tab" aria-expanded="false">Home-base</a>
                        </li>
                    @endcan

 

                   


                </ul>
				<!--end breadcrumb-->
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif

                        <div class="card">
        					<div class="card-body">
        						<form class="form-horizontal" method="post" action="{{url('admin/homebase/edit').'/'.$id}}" id="user_form" enctype="multipart/form-data">
                                    @csrf
                                <div class="card-body">
        
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title" value="{{ $data->title }}" class="form-control">
                                                </div>
                                            </div>
        
                                             
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Slug URL</label>
                                                    <input type="text" name="slug" value="{{ $data->slug }}" class="form-control">
                                                </div>
                                            </div>
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Image URL</label>
                                                    <input type="text" name="posturl" value="{{ $data->posturl }}" class="form-control">
                                                </div>
                                            </div>
        
                                             
        
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Meta Title </label>
                                                    <input type="text" name="metatitle" value="{{ $data->metatitle }}" class="form-control">
                                                </div>
                                            </div>
        
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Meta Description </label>
                                                    <input type="text" name="metadiscription" value="{{ $data->metadiscription }}" class="form-control">
                                                </div>
                                            </div>
        
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Focus Keyword </label>
                                                    <input type="text" name="focuskeyword" value="{{ $data->focuskeyword }}" class="form-control">
                                                </div>
                                            </div>
                                            
                                            
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Image</label>
                                                    <input type="file" name="image[]" value="" class="form-control" placeholder="300x300px">
                                                </div>
                                            </div>
                                            
                                            
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Publish</label>
                                                    <select class="form-control selectpicker" name="publish" data-live-search="true" data-max-options="5" tabindex="-98" required>
                                                            <option disable>Choose</option>
                                                            <option value="1" selected="">Publish</option>
                                                            <option value="0">Draft</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                            @php
                                                $imag ="";
                                                    if(!empty($data->image)){
                                                        $imag = url('public/backend/movie/blog').'/'.$data->image ;
                                                    }else {
                                                        $imag = "https://hubflix.com.in/public/frontend/images/comavtar.png" ;
                                                    }
                                            @endphp
                                            
                                            <!--<img src="{{ $imag }}" alt="{{ $data->title }}"  width="200px" height="200px">-->
                                            
                                            
                                            
        
        
        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea name="description" id="editor1" class="editor1" style="color:black" >{{ $data->content }}</textarea>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="miancontent">miancontent</label>
                                                    <textarea name="miancontent" id="editor1" class="editor1" style="color:black" > {{ $data->miancontent }}  </textarea>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="subcontent">subcontent</label>
                                                    <textarea name="subcontent" id="editor1" class="editor1" style="color:black" >  {{ $data->subcontent }}</textarea>
                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adshow">adshow</label>
                                                    <textarea name="adshow" id="editor1" class="editor1" style="color:black" > {{ $data->adshow }} </textarea>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="anyvideo">anyvideo</label>
                                                    <input type="text" name="anyvideo" value="{{ $data->anyvideo }}" class="form-control" placeholder="300x300px">
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="form-group">
                                                   
                                                   <label for="url">Any URL Video</label>
                                                    <input type="text" name="url" value="{{ $data->description }}" class="form-control" placeholder="300x300px">
                                                </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                           
                                    
                                  
            
                                    @if($errors->any())
                                        <div class="form-group row">
                                            <label class="control-label col-form-label"></label>
                                            <div class="col-sm-7">
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
            
                                    
                                        <div class="error">
                                        
                                        </div>
                                        
                                    <div class="border-top">
                                        <div class="card-body">
                                            @csrf()
                                            <button type="submit" class="btn btn-primary" style="float: right; margin-bottom: 20px">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
        					</div>
        				</div>
              </div>
                <div class="page-wrapper">
                </div>
       </div>
		</div>
		<!--end page wrapper -->
    </div>
  </div>
</div>
        {{-- end --}}

@endsection