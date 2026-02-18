@extends('backend.layouts.master')
@section('title','Document Upload')
@section('content')

<style>
    .img-fluid {
        max-width: 50%;
        height: auto;
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



				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Documents</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">View Doc's</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

			  <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">View</h5>
					  <hr/>
					   <div class="form-body mt-4">
					<!--end row-->
					   {{-- START --}}
                       @php
                            $image = explode(", ", $details['document']) ;
                            $i = 1;
                            $dbinfo = App\Models\AdminDocHistory::where('doc_id', $details['id'])->latest('updated_at')->get();
                            // dd($dbinfo);
                        @endphp
                        <div class="row row-cols-1 row-cols-lg-3">

                            @foreach ($dbinfo as $item)
													@php
														$data_extention = pathinfo($item->document, PATHINFO_EXTENSION);
														$img = "public/backend/default/document.png";
														$img_path = "public/backend/admindocument/";
														$doc = "public/backend/default/document.png";
														$pdfdata = "public/backend/default/pdficon.png";
													@endphp
                                <div class="col">
                                    <div class="card overflow-hidden">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                @if($data_extention == "pdf" || $data_extention == "PDF")
                                                <a href="{{ asset('public/backend/admindocument/'.$item->document)}}" download="{{ $item->document }}"> 
                                                 <img src="{{url($pdfdata)}}" class="img-fluid" alt="...">
                                                </a>
                                                @elseif($data_extention == "docx" )
                                                <a href="{{ asset('public/backend/admindocument/'.$item->document)}}" download="{{ $item->document }}"> 
                                                    <img src="{{url($doc)}}" class="img-fluid" alt="...">
                                                </a>
                                                @else
                                                <a href="{{ asset('public/backend/admindocument/'.$item->document)}}" download="{{ $item->document }}"> 
                                                    <img src="{{url($img_path).'/'.$item->document}}" class="img-fluid" alt="...">
                                                </a>
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h6 class="card-title">{{$item->title}}</h6>
                                                    <div class="cursor-pointer my-2">
                                                        <i class="bx bxs-star text-warning">{{ $i++ }} </i>
                                                      
                                                    </div>
                                                    <div class="clearfix">
                                                        {{-- <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$240</span><span>$199</span></p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            

                                @endforeach
                            {{-- <div class="col">
                                <div class="card overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="assets/images/products/17.png" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title">Black Cover iPhone 8</h6>
                                                <div class="cursor-pointer my-2">
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                </div>
                                                <div class="clearfix">
                                                    <p class="mb-0 float-start fw-bold"><span class="me-2 text-decoration-line-through text-secondary">$179</span><span>$110</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            
                        </div>
					   {{-- END --}}
					</div>
				  </div>
			  </div>


@include('backend.common.footer')
@endsection
