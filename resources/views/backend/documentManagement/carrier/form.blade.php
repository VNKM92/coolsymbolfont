@extends('backend.layouts.master')
@section('title','Document Upload')
@section('content')



<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        @if ($message = Session::get('errors'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
        @endif
        
        <ul class="nav nav-tabs">
            <ul class="nav nav-tabs">
                <li class="pending_approval"><a href="{{url('admin/carrier/doc/upload/data')}}" data-toggle="tab" aria-expanded="true">All Documents</a></li>
            </ul>
        </ul>

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Documents</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Doc's</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add New</h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
                            <div class="col-lg-6">
                                <form action="{{url('admin/carrier/doc/upload'.'/'.$carrier_id)}}" method="POST" class="placeholder-form" enctype="multipart/form-data">  
                                        @csrf
                                        <div class="border border-3 p-4 rounded">
                                            <div class="mb-3">
                                                <label for="inputProductTitle" class="form-label">Title</label>
                                                <input type="text"  name="title" class="form-control" id="inputProductTitle" placeholder="Enter Title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductDescription" class="form-label">Description</label>
                                                <textarea class="form-control" name="comment"  id="inputProductDescription" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputProductDescription" class="form-label">Product Images</label>
                                                <input id="image-uploadify"  type="file" name="document[]" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                            </div>

                                            <div class="mb-3">
                                                <input type="hidden" name="carrier_id" value="{{ base64_decode($carrier_id) }}">
                                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                            </div>
                                        </div>
                                   
                                </form>
                            </div>

                            <div class="col-lg-6">


                            </div>
					   </div>
					</div>
				  </div>
			  </div>


@include('backend.common.footer')
@endsection

