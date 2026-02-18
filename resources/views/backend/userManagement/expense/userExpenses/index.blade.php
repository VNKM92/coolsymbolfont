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
                    <li class="all_leave"><a href="{{url('/admin/user/expense/add')}}" data-toggle="tab" aria-expanded="false">Add User</a>
                    </li>
                    <li class="pending_approval active"><a href="{{url('/admin/user/expense/detail')}}" data-toggle="tab" aria-expanded="true">Add Expenses</a>
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
							<table class="table mb-0" id="carrier_table" >
								<thead class="table-light">
                                    <tr>
                                        <th>User</th>
                                        <th>Month</th>
                                        <th>Total Expense</th>
                                        <th>Grand Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
								<tbody>
                                @foreach ($data as $key => $user)
                                    <tr>
                                        @php
                                            //dd( $user);
                                        @endphp
                                        <td class="copy-text">{{ $user->user_id }}</td>
                                        <td class="copy-text">{{ $user->user_id }}</td>
                                        <td>{{ $user->month }}</td>
                                        <td>{{ $user->month }}</td>
                                        <td class="action action_tooltip">
										    <a href="{{ url('admin/user/expense/add') }}"> 
										    <button type="button" class="btn btn-outline-info btn-sm radius-30 px-4"><i class="bx bx-show"></i><span class="tooltip">Add</span></button></a>
											<a href="{{ url('/admin/user/expense/detail/edit'.'/'. $user->id) }}" class="btn btn-outline-secondary btn-sm radius-30 px-4"> <i class="bx bx-edit"></i> <span class="tooltip">Edit</span></a>
                                            <form method="POST" action="{{ url('/admin/user/expense/detail/delete'.'/'. $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are You Sure Delete This Record..!')" class="btn btn-outline-danger btn-sm radius-30 px-4" type="submit">
                                                    <i class="bx bx-trash"></i><span class="tooltip">Delete</span>
                                                </button>
                                            </form>
										</td>
                                    </tr> 
                                @endforeach
								</tbody>
							</table>
						</div>
						
                        
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
@include('backend.common.footer')


@endsection