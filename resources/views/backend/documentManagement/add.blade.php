@extends('backend.layouts.master')
@section('title','Document Upload')
@section('content')
<style>
    input::placeholder {
        opacity: 0.5 !important;
    }
    select {
        color: #000000ad !important;
    }
    h3.card-title {
        font-size: 13px !important;
    }
    div#documents_toggle {
        padding-bottom: 3px;
    }
</style>
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
                <li class="pending_approval"><a href="{{url('/admin/doc/upload/data')}}" data-toggle="tab" aria-expanded="true">All Documents</a></li>

            </ul>
        </ul>
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-primary shipper_caont" style="padding: 15px;">
                    <div class="card-body p-3 ">
                        <div class="row g-3">
                            <form action="{{url('admin/doc/upload/data/insert')}}" id="createshipmentsubmit2" method="POST" class="placeholder-form" enctype="multipart/form-data">  
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-success">
                                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#pic_to">
                                                <h3 class="card-title">Document <i class="bx bx-plus"></i></h3>
                                            </div>
                                        </div>

                                       <div class="col-md-12">
                                            <div class="input-group mb-6">
                                                <input type="text" class="form-control form-control-sm mb-3" name="title" autocomplete="off" placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="input-group mb-6">
                                                <input type="file" class="form-control" id="inputGroupFile02" name="document[]" >
                                                <label class="input-group-text" for="inputGroupFile02" >Upload</label>
                                            </div>
                                        </div>

                                       

                                        <div class="col-md-12">
                                            <div class="form-group mb-6"> 
                                                <label class="control-label"><strong>Comment :</strong></label>
                                                <textarea name="comment" class="form-control is-valid" id="validationTextarea1" placeholder="Message" required="" style="height: 165px;"></textarea>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                
                                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- start new here  ****************************************-->
</div>
</div>
<!--end page wrapper -->


@include('backend.common.footer')
@endsection

