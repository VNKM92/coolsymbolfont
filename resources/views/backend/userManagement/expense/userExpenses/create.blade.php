<?php 
    if(isset($details)){
        $title = 'Edit';
        $form_id = 'ExpenseForm';
        $action  =  url('/admin/expense/edit/'.$id);
    }else{
        $title = 'Add';
        $form_id = 'ExpenseForm';
        $action  =  url('/admin/user/expense/detail/add');
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
            <li class="pending_approval"><a href="{{url('/admin/user/expense/detail')}}" data-toggle="tab" aria-expanded="true">All Expenses</a></li>
            <li class="all_leave active"><a href="{{url('/admin/user/expense/detail/add')}}" data-toggle="tab" aria-expanded="false">Add New</a></li>
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
                                            <select name="user_id" id="user_id" class="form-control" required>
                                                <option value="">Select User</option>
                                                @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Month: <span class="text text-danger required">*</span></strong>
                                            <select name="month" id="month" class="form-control" required>
                                                <option value="">Select Month</option>

                                                @foreach ($months as $month)
                                                    <option value="{{ $month }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    @php
                                    $fields = [
                                        'sales_revenue' => 'Sales Revenue',
                                        'spm' => 'SPM',
                                        'rent' => 'Rent',
                                        'electricity' => 'Electricity',
                                        'pc_internet' => 'PC/Internet',
                                        'vonage' => 'Vonage',
                                        'dat' => 'DAT',
                                        'email_exp' => 'Email Expense',
                                        'food_tea' => 'Food/Tea',
                                        'mc_tax_cost' => 'MC Tax Cost',
                                        'insurance_bond' => 'Insurance Bond',
                                        'allianz' => 'Allianz',
                                        'transport_cost' => 'Transport Cost',
                                        'salary' => 'Salary',
                                        'incentive' => 'Incentive',
                                        'tl_incentives' => 'TL Incentives',
                                        'admin_charges' => 'Admin Charges',
                                        'office_creation' => 'Office Creation',
                                        'office_party' => 'Office Party',
                                        'miscellaneous' => 'Miscellaneous',
                                        'total_expense' => 'Total Expense',
                                        'grand_total' => 'Grand Total',
                                    ];
                                    @endphp

                                    @foreach ($fields as $field => $label)
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>{{ $label }}: <span class="text text-danger required"></span></strong>
                                            <input type="number" class="form-control" id="{{ $field }}" name="{{ $field }}" placeholder="{{ $label }}" value="{{ old($field) }}" required>
                                        </div>
                                    </div>
                                    @endforeach

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
