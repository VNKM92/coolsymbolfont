@extends('backend.layouts.master')
@section('title','Dashboard')
@section('content')


<!-- Page-header start -->
	<div class="page-header">
		<div class="row align-items-end">
			<div class="col-lg-8">
				<div class="page-header-title">
					<div class="d-inline">
						<h4>Movie List</h4>
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
					<h5>Movie Table</h5>
					<span></span>
					
					@if (Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif

					<a href='{{ url('admin/movie/add') }}'>
					<h6 class="float-right"><i class="fa fa-plus-square"></i> Add ++</h6>
					</a>
					
					<a href="{{ url('admin/movie/tmdb/fetch') }}"><span> <i class="fa fa-film"></i></span></a> 
				</div>
				<div class="card-block">
					<div class="table-responsive dt-responsive">

							
                            <table id="colum-rendr" class="table table-striped table-bordered nowrap">
								<thead>
									<tr>
									    <th width="50px">No</th>
										<th width="100px">Title</th>
										<th>Image</th>
										<th>description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								    
								    @php
								        $i = 1 ;
								    @endphp
                  				@foreach ($data as $item)
                  				
                  				        
                  				        <?php  
                  				             $image =     asset('public/backend/movie/movieposter'.'/'.$item->movieposter);
            								if(!empty($item->urlPoster)){
            								    $image ="$item->urlPoster";
            								}
            							?>
									<tr>
									    <td>{{ $i++ }} </td>
										<td>{{ wordwrap($item->title,15) }} </td>
										<td> <img src="{{$image}}" alt="{{$item->title}}" height="40px" width="40px"> </td>
										<td>{{ wordwrap($item->discription, 20) }}</td>
										
										<td>
											 <a href="{{url('admin/movie/tmdb/fetch')}}"><span> <i class="fa fa-film"></i></span></a> | 
											 <a href="{{url('admin/movie/add')}}"><span> <i class="fa fa-user-plus"></i></span></a> | 
											 <a href="{{url('admin/movie/edit').'/'.$item->id}}">  <span> <i class="fa fa-edit"></i>  <span></a> |
											 <a href="{{url('admin/movie/delete').'/'.$item->id}}">  <span> <i class="fa fa-trash-o"></i> <span></a> |
											 <a href="{{url('admin/movie/tmdb/review/fetch')}}">  <span> <i class="fa fa-cart"></i> <span>Review</a>
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
</div>


@endsection
