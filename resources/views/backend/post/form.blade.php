@extends('backend.layouts.master')
@section('title','Post Add')
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
        <div class="page-body">
            @if(session('success'))
                <h6 class="alert alert-success">
                    {{ session('success') }}
                </h6>
            @endif
                            
                <div class="page-content">
                        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        					<div class="breadcrumb-title pe-3">Post Add</div>
        					<div class="ps-3">
        						<nav aria-label="breadcrumb">
        							<ol class="breadcrumb mb-0 p-0">
        								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
        								</li>
        								<li class="breadcrumb-item active" aria-current="page"> </li>
        							</ol>
        						</nav>
        					</div>
        					<div class="ms-auto">
        						<div class="btn-group">
        							<button type="button" class="btn btn-light">Settings</button>
        							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
        							</button>
        							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
        								<a class="dropdown-item" href="javascript:;">Another action</a>
        								<a class="dropdown-item" href="javascript:;">Something else here</a>
        								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
        							</div>
        						</div>
        					</div>
        				</div>
                        <div class="card">
        					<div class="card-body">
        						<form class="form-horizontal" method="post" action="{{url('admin/post/add')}}" id="user_form" enctype="multipart/form-data">
                                    @csrf
                                <div class="card-body">
        
                                        <div class="row">
                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Sub-Heading</label>
                                                    <input type="text" name="subheading" value="" class="form-control" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title" value="" class="form-control">
                                                </div>
                                            </div>
        
                                             
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Slug URL</label>
                                                    <input type="text" name="slug" value="" class="form-control">
                                                </div>
                                            </div>
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Image URL</label>
                                                    <input type="text" name="posturl" value="" class="form-control">
                                                </div>
                                            </div>
        
                                             
        
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Meta Title </label>
                                                    <input type="text" name="metatitle" value="" class="form-control">
                                                </div>
                                            </div>
        
        
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Meta Description </label>
                                                    <input type="text" name="metadiscription" value="" class="form-control">
                                                </div>
                                            </div>
                                            
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">KeyWord </label>
                                                    <input type="text" name="focuskeyword" value="" class="form-control">
                                                </div>
                                            </div>
        
        
                                            <!-- <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Focus Keyword </label>
                                                    <input type="text" name="focuskeyword" value="" class="form-control">
                                                </div>
                                            </div> -->
                                            
                                            
        
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
                                            
                                            
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">ScriptAds</label>
                                                     <input type="text" name="scriptads" value="" class="form-control" placeholder="300x300px">
                                                    
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea name="description" id="editor1" class="editor1" style="color:black" ></textarea>
                                                </div>
                                            </div>


                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Content</label>
                                                    <textarea name="content" id="editor1" class="editor1" style="color:black" ></textarea>
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
        {{-- end --}}

@endsection