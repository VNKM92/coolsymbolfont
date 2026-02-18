@extends('backend.layouts.master')
@section('title','User Management')
@section('content')
<style>
    h2#swal2-title {
        font-size: 20px;
        margin: 0px;
    }
    div#swal2-html-container {
        font-size: 14px;
        margin: 10px 0px 0px;
    }
    .swal2-popup.swal2-modal.swal2-loading.swal2-show {
        width: 270px;
        padding-top: 10px;
    }
    .swal2-loader {
        border-color: #80c427 rgba(0,0,0,0) #80c427 rgba(0,0,0,0);
    }
</style>
<style>
    .agmain li {
            display: none;
            }
        .show_age {
        display: block !important;
        }
        div#agency_detail_edit .card-header {
            background: none;
            border: none;
        }
        div#agency_detail_edit .card-header h3 {
            color: #1e55bf !important;
            font-weight: 600;
        }
        td.action_tooltip .btn {
            padding: 0px 15px 2px !important;
            border: 0px;
        }
</style>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
                </div>
				
				<ul class="nav nav-tabs">
                    <li class="pending_approval active"><a href="{{url('/admin/user/expense')}}" data-toggle="tab" aria-expanded="true">All Exp. Users</a>
                    </li>
                    
                    <li class="all_leave"><a href="{{url('/admin/user/expense/detail/add')}}" data-toggle="tab" aria-expanded="false">Add New</a>
                        </li>
                </ul>
				
				<!--end breadcrumb-->
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table mb-0" id="carrier_table">
								<thead class="table-light">
									<tr>
                                        <th style="width:20%">No</th>
                                        <th style="width:20%">Name</th>
                                        <th style="width:20%">Email</th>
                                        <th style="width:20%">Roles</th>
                                        <th style="width:20%">Month</th>
                                        <th style="width:20%">Sales Revenue</th>
                                        <th style="width:20%">Electricity</th>
                                        <th style="width:20%">Vonage</th>
                                        <th style="width:20%">DAT</th>
                                        <th style="width:20%">Salary</th>
                                        <th style="width:20%">Total Exp.</th>
                                        <th style="width:20%">Grand Total</th>
                                        {{-- <th style="width:20%">Status</th> --}}
                                        <th style="width:20%">Actions</th>
									</tr>
								</thead>
                                @php
                                    //dd($data);
                                         $i = 1;
                                @endphp
								<tbody id="user_data">
                                    @foreach ($data as $key => $user)
                                            @php
                                                $uname = App\Models\UserExpense::where('id', $user->user_id)->first();
                                                $usertype = "";
                                                if($user->role == 1){
                                                    $usertype = "Team Leader";
                                                }else{
                                                    $usertype = "Agent";
                                                }

                                                $userStatus = "";
                                                if($user->role == 1){
                                                    $userStatus = "Active";
                                                }else{
                                                    $userStatus = "Inactive";
                                                }
                                            @endphp
                                    
                                        <tr>
                                            <td class="copy-text">{{ $i ++ }}</td>
                                            <td class="copy-text">{{ $uname->name }}</td>
                                            <td class="copy-text">{{ $uname->email }}</td>
                                            <td class="copy-text">{{ $usertype }}</td>
                                            {{-- // <td class="copy-text"> {{ $userStatus }}</td> --}}
                                            <td class="copy-text">{{ $user->month }}</td>
                                            <td class="copy-text">{{ $user->sales_revenue}}</td>
                                            <td class="copy-text">{{ $user->electricity }}</td>
                                            <td class="copy-text">{{ $user->vonage }}</td>
                                            <td class="copy-text">{{ $user->dat }}</td>
                                            <td class="copy-text">{{ $user->salary }}</td>
                                            <td class="copy-text">{{ $user->total_expense }}</td>
                                            <td class="copy-text">{{ $user->grand_total }}</td>

                                            <td class="action action_tooltip">
                                                <a href="{{ url('admin/user/expense/detail/add') }}"> 
                                                <button type="button" class="btn btn-outline-info btn-sm radius-30 px-4"><i class="bx bx-user"></i><span class="tooltip">Add</span></button></a>
                                                <a href="{{ url('admin/user/expense/detail/add'.'/'. $user->user_id) }}"> 
                                                <button type="button" class="btn btn-outline-info btn-sm radius-30 px-4"><i class="bx bx-plus"></i><span class="tooltip">Add</span></button></a>
                                                <a href="{{ url('/admin/user/expense/detail/edit'.'/'. $user->id) }}" class="btn btn-outline-secondary btn-sm radius-30 px-4"> <i class="bx bx-edit"></i> <span class="tooltip">Edit</span></a>
                                                <a href="{{ url('/admin/user/expense/detail/delete'.'/'.$user->id) }}" class="btn btn-outline-danger btn-sm radius-30 px-4"  title="Delete Credential"><i class="bx bx-trash"></i><span class="tooltip">Delete</span>
                                                </a>  
                                            </td>
                                        </tr>
                                    
                                    @endforeach
								</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
@include('backend.common.footer')



@endsection