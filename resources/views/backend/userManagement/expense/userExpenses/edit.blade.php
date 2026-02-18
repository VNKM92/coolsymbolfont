<?php 
    if(isset($expdata)){
        $title = 'Edit';
        $form_id = 'ExpenseForm';
        $action  =  url('/admin/user/expense/detail/edit'.$expdata->id);
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
            <li class="pending_approval"><a href="{{url('/admin/user/expense/detail')}}" data-toggle="tab" aria-expanded="true">All Expenses</a></li>
            <li class="all_leave active"><a href="{{url('/admin//user/expense/detail/add')}}" data-toggle="tab" aria-expanded="false">Add Expense</a></li>
        </ul>

        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-primary" style="padding: 20px 0px;">
                    <div class="card-body p-3 col-xl-9 mx-auto">
                        <div class="card-title d-flex align-items-center pb-2">
                            <div><i class="bx bxs-wallet me-1 font-22 text-primary"></i></div>
                            <h5 class="mb-0 text-primary ">{{ $title }} Expense</h5>
                        </div>
                        <div class="row g-3">
                            <form class="form-horizontal" name="expenseForm" method="post" action="{{ url('/admin/user/expense/detail/edit'.'/'.$expdata->id) }}" id="{{ $form_id }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>User: <span class="text text-danger required">*</span></strong>
                                            <select name="user_id" id="user_id" class="form-control" >
                                                <option value="" disabled>Select User</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" {{ $user->id == $expdata->user_id ? 'selected' : '' }} disabled>{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Month: <span class="text text-danger required">*</span></strong>
                                            <select name="month" id="month" class="form-control" >
                                                <option value="">Select Month</option>
                                                @foreach ($months as $month)
                                                    <option value="{{ $month }}" {{ $month == $expdata->month ? 'selected' : '' }} disabled>{{ $month }}</option>
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
                                        ];
                                    @endphp

                                    @foreach ($fields as $field => $label)
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>{{ $label }}: <span class="text text-danger required"></span></strong>
                                            <input type="text" class="form-control addexp" id="{{ $field }}" name="{{ $field }}" placeholder="{{ $label }}" value="{{ old($field, $expdata->$field) }}" required>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <strong>Grand Total: <span class="text text-danger required"></span></strong>
                                            <input type="text" Readonly class="form-control" id="grand_total" name="grand_total" placeholder="Grand Total" value="{{ $expdata['grand_total'] }}" required="">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    $("select.form-control").find("option:contains('superadmin')").hide();

    $(".email").keyup(function() {
        $(this).val($(this).val().toLowerCase());
    });

    $('form#ExpenseForm').validate({
        rules: {
            @foreach ($fields as $field => $label)
            {{ $field }}: {
                required: true,
                minlength: 1,
                maxlength: 255
            },
            @endforeach
        }
    });



    function calculateTotals() {
            let expenSum = 0;

            $("input.addexp").each(function() {
                expenSum += +$(this).val() || 0;
            });
            $("input#grand_total").val(expenSum);
    }

     $("input.addexp").on('input change', function() {
            calculateTotals();
        });

        
        calculateTotals();

});
</script>

@include('backend.common.footer')
@endsection
