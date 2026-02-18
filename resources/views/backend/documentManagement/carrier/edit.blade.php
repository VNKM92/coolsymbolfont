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
				<li class="pending_approval"><a href="{{url('/admin/doc/upload/data')}}" data-toggle="tab" aria-expanded="true">All Documents</a></li>
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
					  <h5 class="card-title">Update</h5>
					  <hr/>
					   <div class="form-body mt-4">

						<form action="{{url('admin/doc/upload/data/edit/'.$details->id)}}" id="createshipmentsubmit2" method="POST" class="placeholder-form" enctype="multipart/form-data">  
							@csrf

							<div class="row">
								<div class="col-lg-8">
									<div class="border border-3 p-4 rounded">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Title</label>
											<input type="text"  name="title" class="form-control" id="inputProductTitle" placeholder="Enter Title" value="{{ $details['title']}}">
										
										</div>
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Description</label>
											<textarea class="form-control" name="comment"  id="inputProductDescription" rows="3">{!! $details['comment'] !!} </textarea>
										</div>
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Product Images</label>
											<input id="image-uploadify"  type="file" name="document[]" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
										</div>

										<div class="mb-3">
											<button type="submit" class="btn btn-primary" id="submit">Submit</button>

										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="border border-3 p-4 rounded">
										<div class="row g-3">
											
											@php
												$image = explode(", ", $details['document']) ;
												$i = 1;

												$dbinfo = App\Models\AdminDocHistory::where('doc_id', $details['id'])->get();

												// dd($dbinfo);
											@endphp
											
											@foreach ( $dbinfo as $item)

											@php
												
												$data_extention = pathinfo($item->document, PATHINFO_EXTENSION);
												$img = "public/backend/default/document.png";
												$img_path = "public/backend/carrierdocument/"
												
												// var_dump($dd);
												// dd($dd);
											@endphp
																
													{{ $i++ .'.'}} 
													@if($data_extention == "pdf" || $data_extention == "PDF")
														@php
															$pdfdata = "public/backend/default/pdficon.png";
														@endphp
														<a href="{{ asset('public/backend/carrierdocument/'.$item->document)}}" download="{{ $item->document }}"> 
														<img src="{{url($pdfdata)}}" style="height:50px; width:50px" downloads>  <i class="fa fa-download" aria-hidden="true" > <i class="fa fa-download" aria-hidden="true"></i>

														<i class="fa-regular fa-file-pdf" style="height:50px; width:50px"></i>
														</a>
													@elseif($data_extention == "docx" || $data_extention == "DOCX")

															@php
																$doc = "public/backend/default/document.png";
															@endphp
															<a href="{{ asset('public/backend/carrierdocument/'.$item->document)}}" download="{{ $item->document }}"> 
															<img src="{{url($doc)}}" style="height:50px; width:50px" downloads>  <i class="fa fa-download" aria-hidden="true" > <i class="fa fa-download" aria-hidden="true"></i>

															<i class="fa-regular fa-file-pdf" style="height:50px; width:50px"></i>
															</a>
													@else

														<a href="{{ asset('public/backend/carrierdocument/'.$item->document)}}" download="{{ $item->document }}"> 
															
														<img src="{{url($img_path).'/'.$item->document}}" style="height:50px; width:50px" downloads>  <i class="fa fa-download" aria-hidden="true">
														<i class="fa fa-download" aria-hidden="true"></i></a>

													@endif
											@endforeach
										</div> 
									</div>
								</div>
							</div>
						</form>
					<!--end row-->
					   {{-- START --}}
					   {{-- END --}}
					</div>
				  </div>
			  </div>


@include('backend.common.footer')
@endsection
