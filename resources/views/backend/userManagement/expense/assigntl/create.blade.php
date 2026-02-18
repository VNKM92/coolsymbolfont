<?php 
    if(isset($details)){
        $title = 'Edit';
        $form_id = 'ExpenseForm';
        $action  =  url('/admin/user/expense/assign/'.$id);
    }else{
        $title = 'Add';
        $form_id = 'ExpenseForm';
        $action  =  url('/admin/user/expense/assign/add');
    }
?>

@extends('backend.layouts.master')
@section('title','Expense Management')
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
                    <li class="all_leave "><a href="{{url('/admin/user/expense/assign')}}" data-toggle="tab" aria-expanded="false">All Assign Data</a>
                    </li>
                    <li class="pending_approval active"><a href="{{url('/admin/user/expense/assign/add')}}" data-toggle="tab" aria-expanded="true">Add Assign</a>
                    </li>
                </ul>
				

        <div class="row">
            <div class="col-xl-12">
                <div class="card border-primary">
                    <div class="card-body p-3 col-xl-9 mx-auto">
                        <div class="card-title d-flex align-items-center pb-2">
                            <div><i class="bx bxs-wallet me-1 font-22 text-primary"></i></div>
                            <h5 class="mb-0 text-primary ">{{ $title }} Expense</h5>
                        </div>
                        <div class="row g-3">
                            <form class="form-horizontal" name="expenseForm" method="post" action="{{ $action }}" id="{{ $form_id }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>User: <span class="text text-danger required">*</span></strong>
                                            <select name="assign_tl" id="assign_tl" class="form-control" required>
                                                <option value="">Select TL</option>
                                                @foreach ($tlusers as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Select Agent: <span class="text text-danger required">*</span></strong>
                                            <select name="assign_to_agent" id="assign_to_agent" class="form-control" required>
                                                <option value="">Select Agent</option>
                                                @foreach ($agentusers as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach

                                                <input type="hidden" name="status" value="1">
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12 pt-4">
                                        <button type="submit" class="btn btn-primary ">Submit</button>
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


@include('backend.common.footer')
@endsection
