@extends('backend.layouts.master')
@section('title','post')
@section('content')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
              
				<ul class="nav nav-tabs">
                    @can('shipper-all')
                    <!-- <li class="pending_approval"><a href="{{url('/admin/blog/list')}}" data-toggle="tab" aria-expanded="true">All blog</a></li> -->
                    @endcan


                    <li class="all_leave active"><a href="{{url('/admin/post')}}" data-toggle="tab" aria-expanded="false">Post</a>
                        </li>
                    @can('shipper-create')
                    <li class=""><a href="{{url('/admin/post/add')}}" data-toggle="tab" aria-expanded="false">Create Post</a>
                    </li>
                    @endcan

                   


                </ul>
				<!--end breadcrumb-->
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                <p>{{ $message }}</p>
                </div>
                @endif


				<div class="card" id="shipper_tbl">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
						
						</div>
						<div class="">
                            <div class="row date-filter">
                                <div class="col-md-2">
                                    <h4 class="text text-primary">Search By Date:</h4>
                                </div>
                                <div class="col-md-3">
                                    <label>From Date:</label>
                                    <input type="text" id="min" name="min" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>To Date:</label>
                                    <input type="text" id="max" name="max" class="form-control">
                                </div>
                            </div>
							<table class="table mb-0" id="carrier_table">
								<thead class="table-light">
									<tr>
                                       <th width="200px">No</th>
                                       <th width="200px">Title</th>
										<!--<th>Img</th>-->
										<th>Slug</th>
										<th>Meta Title</th>
										<th>publish</th>
										<th>Action</th>
									</tr>
								</thead>
								
								<tbody id="filter_data">
								@php

								$i = 0;
								@endphp

								@if(count($data) > 0)
                                @foreach ($data as $item)
                  				        
                  				         @php
                                                $imag ="";
                                                    if(!empty($item->image)){
                                                        $imag = url('public/backend/image/post').'/'.$item->image ;
                                                    }else {
                                                        $imag = "N/A" ;
                                                    }
                                            @endphp
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ substr($item->title,0, 15) }} </td>
											<!--<td> <img src="{{ $imag }}"  height="40px" width="40px"> </td>-->
											<td>{{ substr($item->slug, 0 ,15)}}</td>
											<td>{!! substr($item->metatitle, 0, 20)!!}  </td>
											<td>
												@php if($item->publish == 1)
														echo "Publish" ;
													else{
														echo "Draft" ;
													}
													@endphp
													</td>
                                            
                                            <td>
                                                
                                                @can('shipper-edit')
                                                <a href="{{ url('admin/post/edit').'/'.$item->id}}" class="btn btn-outline-secondary btn-sm radius-30 px-4"> <i class="bx bx-edit"></i> <span class="tooltip">Edit</span></a>
                                                @endcan

                                                @can('shipper-delete')
                                                <a href="{{ url('admin/post/delete',$item->id )}}"> 
                                                <button type="button" value="{{ url('admin/post/delete',$item->delete )}}" class="btn btn-outline-danger btn-sm radius-30 px-4" onclick="return confirm('Are You Sure Delete This Record..!')"><i class="bx bx-trash"></i><span class="tooltip">Delete</span></button></a>
                                                @endcan
                                            </td>
											
                                        </tr>
                                @endforeach

                                        @else

                                        <tr style="background-color: #edf3f652;">
                                            <td colspan="8">
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4 not-found">
                                                        <img src="{{url('/public/backend/assets/images/message.png')}}">
                                                        <h4> No Shipper created, yet.</h4>
                                                    </div>
                                                    <div class="col-md-4"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif

								</tbody>
							</table>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
    </div>
  </div>
</div>

{{-- working --}}
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>  
    <script type="text/javascript"> 
        $(document).ready(function() {
            // $("#datefilter").click(function(){
            //     var min = $("#min").val();
            //     var max = $("#max").val();
            //     if(min && max!=''){
            //         $.ajax({
            //       url: "{{url('/admin/shipper/date-filter')}}",
            //       type:"POST",
            //       data:{
            //         "_token": "{{ csrf_token() }}",
            //         min:min,
            //         max:max,
            //       },
            //       success:function(response){
            //         $("#filter_data").html(response);
            //       }
            //      });
            //     }else{
            //         alert("Please Select From & To Date..");
            //     }
                
            // })
        } );
        
        $(document).ready(function () {
            $.fn.dataTable.ext.search.push(
                function (settings, data, dataIndex) {
                    var min = $('#min').datepicker('getDate');
                    var max = $('#max').datepicker('getDate');
                    var startDate = new Date(data[7]);
                    if (min == null && max == null) return true;
                    if (min == null && startDate <= max) return true;
                    if (max == null && startDate >= min) return true;
                    if (startDate <= max && startDate >= min) return true;
                    return false;
                }
            );
        
            $('#min').datepicker();
            $('#max').datepicker();
            var table = $('#carrier_table').DataTable();
        
            // Event listener to the two range filtering inputs to redraw on input

            $('#min, #max').change(function () {
                table.draw();
            });
        });
        
    </script>
@include('backend.common.footer')
@endsection


