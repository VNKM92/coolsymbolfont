<?php 
    if(isset($details)){
        $title = 'Edit';
        $form_id = 'CuisineForm';
		$image_text = 'Update Image';
        $action  =  url('/admin/user/expense/edit/'.$id);
    }else{
        $title = 'Add';
        $form_id = 'userexpense';
		$image_text = 'Update Image';
        $action  =  url('/admin/user/expense/add');
    }
?>


@extends('backend.layouts.master')
@section('title','User Management')
@section('content')

        <div class="page-wrapper">
			<div class="page-content">
			    @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                <ul class="nav nav-tabs">
                    <li class="pending_approval"><a href="{{url('/admin/user/expense')}}" data-toggle="tab" aria-expanded="true">All Exp. Users</a>
                    </li>
                    
                    <li class="all_leave active"><a href="{{url('/admin/user/expense/add')}}" data-toggle="tab" aria-expanded="false">Add New</a>
                        </li>
                </ul>

                <div class="row">
					<div class="col-xl-12">
						<div class="card border-primary">
							<div class="card-body p-3 col-xl-9 mx-auto">
								<div class="card-title d-flex align-items-center pb-2">
									<div><i class="bx bxs-user me-1 font-22 text-primary"></i>
									</div>
									<h5 class="mb-0 text-primary ">Add User</h5>
								</div>
								<!-- <hr> -->
								<div class="row g-3">
                                <form class="form-horizontal"  method="post" action="{{ $action }}" id="{{ $form_id }}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Name: <span class="text text-danger required">*</span></strong>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" minlength="2" maxlength="30" >
                                            <input type="hidden" name="status" value="1">
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Email: <span class="text text-danger required">*</span></strong>
                                             <input type="email" class="form-control" id="email" name="email" placeholder="Email" minlength="2" maxlength="60" >
                                             <span class="text-danger" id="email_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group passowrd_">
                                            <input id="password" placeholder="Password" class="form-control password error"  name="password" type="hidden" value="">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group confirm_password">
                                        
                                            <input name="confirm_password" placeholder="Confirm Password" class="form-control  confirm_pass" type="hidden" value="">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>User Type: <span class="text text-danger required">*</span></strong>
                                            <select name="role" id="" class="form-control" required>
                                                <option disable>Choose</option>
                                                <option value="2">Agent</option>
                                                <option value="1">Team Leader</option> 
                                                {{-- //Team Leader == 1 --}}
                                                {{-- //Agent == 2 --}}
                                            </select>
                                        </div>
                                    </div>
                                    
                                     <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Phone No:<span class="text text-danger required">*</span></strong>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="" >
                                        </div>
                                    </div>
                               
                                    <div class="col-12 pt-4">
										<button type="submit"  class="btn btn-primary ">Submit</button>
									</div>
                                </div>

                               </form>

								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>


       
  
  <script>
      $(document).ready(function(){
        
        
        $("input#email").keyup(function(){
            var email = $(this).val();
            $.ajax({
              url: "{{url('/admin/validate/user-expanse-email')}}",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                email:email,
              },
              success:function(response){
                if(response==1){
                    $("form#agencyform button#agency_update_btn").prop('disabled', true);
                    $("#email_error").text("This email-id is already exist");
                    $('form#userformdata button').prop('disabled', true);
                }else{
                    $("form#agencyform button#agency_update_btn").prop('disabled', false);
                    $("#email_error").text("");
                    $('form#userformdata button').prop('disabled', false);
                }
              }
            });
        })
        
        
        
        });
  </script>
@include('backend.common.footer')
@endsection
