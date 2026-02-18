@extends('backend.layouts.master')
@section('title','Dashboard')
@section('content')


<!-- Page-header start -->
	<div class="page-header">
		<div class="row align-items-end">
			<div class="col-lg-8">
				<div class="page-header-title">
					<div class="d-inline">
						<h4>Add List</h4>
						{{-- <span>List</span> --}}
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="page-header-breadcrumb">
					<ul class="breadcrumb-title">
						<li class="breadcrumb-item">
							<a href="index-1.htm"> <i class="feather icon-home"></i> </a>
						</li>
						<li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a>
						</li>
						{{-- <li class="breadcrumb-item"><a href="#!">Job Application Form</a>
						</li> --}}


					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Page-header end -->

<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
			 <div class="card">
				<div class="card-header">
					<h5> Table</h5>
					<span></span>

					<a href='{{ url('admin/movie/add') }}'>
					<h6 class="float-right"><i class="fa fa-plus-square"></i> Add ++</h6>
					</a>
				</div>
				<div class="card-block">
					
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
