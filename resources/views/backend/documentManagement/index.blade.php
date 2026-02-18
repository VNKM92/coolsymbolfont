@extends('backend.layouts.master')
@section('title','Document Management')
@section('content')

	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    @endif
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
                <li class="pending_approval active"><a href="{{url('/admin/doc/upload/data')}}" data-toggle="tab" aria-expanded="true">All Documents</a>
                </li>
                @can('report')
                <li class="all_leave"><a href="{{url('/admin/doc/upload/data/add')}}" data-toggle="tab" aria-expanded="false">+ Add</a>
                    </li>
                    @endcan
            </ul>
			<div class="card">
				<div class="card-body">
					<div class="d-lg-flex align-items-center mb-4 gap-3">
					</div>
					<div class="table-responsive" >
						
						<table class="table mb-0" id="carrier_table">
						<thead class="table-light">
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Document</th>
								<th>Comment</th>
								<th width="154px;">Action</th>
							</tr>
						 </thead>
							
							@php 
							$i=0;
							@endphp
							@if(count($data) > 0)
							@foreach ($data as  $item)

                                @php
                                    $docimg = "public/backend/default/document.png";
                                    $doc = App\Models\AdminDocHistory::where('doc_id', $item['id'])->latest('updated_at')->first();
                                    
                                @endphp
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $item->title }}</td>
								<td>{{ $item->document }}
                                    {{-- <img src="{{$doc}}" alt="" height="50px" width="50px"> --}}
                                    <a href="{{ asset('public/backend/admindocument/'.$doc->document)}}" download="{{ $item->document }}"> 
                                        <img src="{{url($docimg)}}" class="img-fluid1" alt="Document" height="50px" width="50px">
                                       </a>

                                </td>
								<td>{{ $item->comment }}</td>
								
								<td class="action_tooltip">
	                                 @php
                                    	$nm= 'xuvlogis023';
                                    	$agencyid = base64_encode($item->id);
                                    	$agencyid = $item->id;
                                    @endphp


                                    <a class="btn btn-outline-info btn-sm radius-30 px-4" href="{{url('admin/doc/upload/data/view').'/'.$agencyid }}"> <i class="bx bx-show"></i> <span class="tooltip">View</span></a>


                                    @can('report')
	                                 <a class="btn btn-outline-info btn-sm radius-30 px-4" href="{{url('admin/doc/upload/data/edit').'/'.$agencyid }}"> <i class="bx bx-edit"></i> <span class="tooltip">Edit</span></a>
                                     @endcan
									{{-- <button type="button" class="btn btn-outline-secondary btn-sm radius-30 px-4 agency_detail_form" value="{{ $item->id }}"><i class="bx bx-edit"></i><span class="tooltip">Edit</span></button> --}}
									
								</td>
							</tr>
							@endforeach
							@else
                            <tr style="background-color: #edf3f652;">
                                <td colspan="7">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 not-found">
                                            <img src="{{url('/public/backend/assets/images/message.png')}}">
                                            <h4> No Office created, yet.</h4>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </td>
                            </tr>
                            @endif
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end page wrapper -->



<!-- Agency form modal start -->
<div class="modal" id="agency_detail_edit">
</div>
<!-- Agency form modal end -->
	
<script>
    $(document).ready(function() {
    $('#carrier_table').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible'
                }
                
            },
            'colvis'
        ],
        columnDefs: [ {
            // targets: +0,
            visible: false
        } ]
    } );
} );
</script>



@include('backend.common.footer')
@endsection
