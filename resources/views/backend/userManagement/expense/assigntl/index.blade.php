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
                    <li class="all_leave active"><a href="{{url('/admin/user/expense/assign')}}" data-toggle="tab" aria-expanded="false">All Assign Data</a>
                    </li>
                    <li class="pending_approval"><a href="{{url('/admin/user/expense/assign/add')}}" data-toggle="tab" aria-expanded="true">Add Assign</a>
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
                                        <th>Assign By</th>
                                        <th>Assign TL</th>
                                        <th>Assign To </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
								<tbody id="user_data">
                                @foreach ($data as $key => $user)
                                    <tr>
                                        @php
                                            $assingby = App\Models\UserExpense::where('id', $user->assign_by)->first();
                                            $assingtl = App\Models\UserExpense::where('id', $user->assign_tl)->first();
                                            $assingto = App\Models\UserExpense::where('id', $user->assign_to_agent)->first();
                                        @endphp

                                        <td class="copy-text">{{ $assingby->name ?? "Super Admin"}}</td>
                                        <td class="copy-text">{{ $assingtl->name ?? ""}}</td>
                                        <td class="copy-text">{{ $assingto->name ?? "" }}</td>

                                        <td class="action action_tooltip">
										    <a href="{{ url('admin/user/expense/assign/add') }}"> 
										    <button type="button" class="btn btn-outline-info btn-sm radius-30 px-4"><i class="bx bx-show"></i><span class="tooltip">Add</span></button></a>
											<a href="{{ url('/admin/user/expense/assign/edit'.'/'.$user->id) }}" class="btn btn-outline-secondary btn-sm radius-30 px-4"> <i class="bx bx-edit"></i> <span class="tooltip">Edit</span></a>
                                            
                                            <a href="{{ url('/admin/user/expense/assign/delete'.'/'.$user->id) }}" class="btn btn-outline-danger btn-sm radius-30 px-4"  title="Delete Credential"><i class="bx bx-trash"></i><span class="tooltip">Delete</span>
                                            </a> 
										</td>
                                    </tr> 
                                @endforeach
								</tbody>
							</table>
						</div>
						
                        
						
						
						
						
						<!--import or export-->
						<!--<form action="{{ url('admin/import') }}" method="POST" enctype="multipart/form-data">-->
      <!--                      @csrf-->
      <!--                      <div class="form-group mb-4">-->
      <!--                          <div class="custom-file text-left">-->
      <!--                              <input type="file" name="file" class="custom-file-input" id="customFile">-->
      <!--                              <label class="custom-file-label" for="customFile">Choose file</label>-->
      <!--                          </div>-->
      <!--                      </div>-->
      <!--                      <button class="btn btn-primary">Import Users</button>-->
      <!--                      <a class="btn btn-success" href="{{ url('admin/export-users') }}">Export Users</a>-->
      <!--                  </form>-->
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
@include('backend.common.footer')

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(function() {
            $(document).on('change','.stat_check', function() {
                var curr    = $(this).prop('checked');
                var cat     = $(this).attr('cat');
                $.ajax({
                    type:"post",
                    url:"{{ url('admin/changeuserStatus') }}",
                    data: {'curr': curr, 'cat':cat},
                    success:function(resp){
                        if(resp.status == 'true'){
                            swal(resp.msg,'','success');
                        } else{
                            swal(resp.msg,'','warning');
                        }
                    }
                })
            })
        })
    </script>

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
            // targets: -2,
            visible: false
        } ]
        } );
    
    //user filter req
    $("a.b_status").click(function(e){
        e.preventDefault();
        var filter_type = $(this).attr('search-type');
        var filter_value = $(this).attr('value');
        $("a.b_status").removeClass("active");
        $(this).addClass("active");
        $.ajax({
          url: "{{url('/admin/user-filter')}}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            filter_type:filter_type,
            filter_value:filter_value,
          },
          success:function(response){
              let timerInterval
                Swal.fire({
                  title: 'Wait..',
                  html: 'I will Filter in <b></b> milliseconds.',
                  timer: 1000,
                  timerProgressBar: true,
                  didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                      b.textContent = Swal.getTimerLeft()
                    }, 500)
                  },
                  willClose: () => {
                    clearInterval(timerInterval)
                  }
                }).then((result) => {
                  /* Read more about handling dismissals below */
                  if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                  }
                })
                setTimeout(function(){
                    $("#user_data").html(response);
                    $("div#carrier_table_paginate, div#carrier_table_info").hide();
                }, 500)
          }
         });
    })
} );

   

</script>
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--    $('#carrier_table').DataTable( {-->
<!--        dom: 'Bfrtip',-->
<!--        buttons: [-->
<!--        'copy', 'csv', 'excel', 'pdf', 'print',-->
        
<!--        ]-->
        
       
<!--    } );-->
<!--} );-->
<!--</script>-->
{{-- swal({
	title: "User created!",
	text: "Suceess message sent!!",
	icon: "success",
	button: "Ok",
	timer: 2000
}); --}}
<script>
    $(document).ready(function() {
    $('#carrier_table66').DataTable( {
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
@endsection