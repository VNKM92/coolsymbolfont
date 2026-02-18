	@php
	$ip = getenv("REMOTE_ADDR") ;
	$ipchecker = App\Models\IpChecker::where('ip_address', $ip)->where('whitelisted', 1)->first();
	//dd($ipchecker);


	//$usr = Auth::guard('web')->user();
	//$roles = Role::orderBy('id','DESC')->paginate(5);

	//for logout if user inactive

	@endphp

	<!--      $ipchecker = 0;-->
	<!--      if($ipchecker == null){-->
	<!--	Session::flush();-->
	<!--	return  Route::resource('login', 'LoginController');-->
	<!--}-->
	<div class="sidebar-wrapper" data-simplebar="true">
	    <div class="sidebar-header">
	        <div>
	            <?php 
					$company_detaills = App\Models\Companydetail::first();
					$clogo = isset($company_detaills->company_logo) ? $company_detaills->company_logo : Null ;
						//dd($clogo);
				?>
	            @if($clogo)
	            <a href="{{url('/admin/dashboard')}}">
	                <img src="{{url('public/backend/assets/office')."/".$company_detaills->company_logo}}" class="logo-icon" alt="logo icon"></a>
	            @endif
	        </div>
	        <div>
	            <h4 class="logo-text">
	            </h4>
	        </div>
	        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
	        </div>
	    </div>
	    <!--navigation-->

	    <ul class="metismenu" id="menu">
	        <li>
	            <a href="{{url('admin/dashboard')}}" class="">
	                <div class="parent-icon"><i class='bx bx-home-circle'></i>
	                </div>
	                <div class="menu-title">Dashboard</div>
	            </a>
	        </li>

	        

			<li>
	            <a href="javascript:void(0);" class="has-arrow">
	                <div class="parent-icon"><i class="bx bx-happy-heart-eyes"></i>
	                </div>
	                <div class="menu-title">Manage Post</div>
	            </a>
	            <ul>
	                <li> <a href="{{url('admin/post')}}"><i class="bx bx-right-arrow-alt"></i>All Post</a></li>
	                <!-- <li> <a href="{{url('admin/blog')}}"><i class="bx bx-right-arrow-alt"></i>Search Truck</a></li> -->
	                
	            </ul>
	        </li>


			<li>
	            <a href="javascript:void(0);" class="has-arrow">
	                <div class="parent-icon"><i class="bx bx-food-menu"></i>
	                </div>
	                <div class="menu-title">Manage page</div>
	            </a>
	            <ul>
	                <li> <a href="{{url('admin/page')}}"><i class="bx bx-right-arrow-alt"></i>All Page</a></li>
	                <!-- <li> <a href="{{url('admin/blog')}}"><i class="bx bx-right-arrow-alt"></i>Search Truck</a></li> -->
	                
	            </ul>
	        </li>
	        
	        @can('loads-list')
	        <li>
	            <a href="javascript:void(0);" class="has-arrow">
	                <div class="parent-icon"><i class="bx bxl-blogger"></i> 
	                </div>
	                <div class="menu-title">Manage Blog</div>
	            </a>
	            <ul>
	                <li> <a href="{{url('admin/blog')}}"><i class="bx bx-right-arrow-alt"></i>All Blog</a></li>
	                <!-- <li> <a href="{{url('admin/blog')}}"><i class="bx bx-right-arrow-alt"></i>Search Truck</a></li> -->
	                
	            </ul>
	        </li>
	        @endcan



	    <!--Office-->
	    @can('agency-list')
	    <!-- <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class="fadeIn animated bx bx-buildings"></i>
	            </div>
	            <div class="menu-title">Manage Office</div>
	        </a>
	        <ul>
	            <li> <a href="{{url('admin/agency')}}"><i class="bx bx-right-arrow-alt"></i>Office</a></li>
	            <li> <a href="{{url('admin/agency/new/office')}}"><i class="bx bx-right-arrow-alt"></i>Office Manage</a></li>
	        </ul>
	    </li> -->
	    @endcan
	    <!--Office End-->

	    

	    <!--User Start-->
	    @can('user-list')
	    <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class="lni lni-users"></i>
	            </div>
	            <div class="menu-title">Manage User</div>
	        </a>
	        <ul>
	            <li> <a href="{{url('admin/users')}}"><i class="bx bx-right-arrow-alt"></i>All User</a></li>
	            @can('user-create')
	            <!-- <li> <a href="{{url('admin/users/create')}}"><i class="bx bx-right-arrow-alt"></i>Add New</a></li> -->
	            @endcan
	        </ul>
	    </li>
	    @endcan
	    <!--User End-->
	    <!--AR/AP Users-->
	    @can('uagent-list')
	    <!-- <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class="fadeIn animated bx bx-task"></i>
	            </div>
	            <div class="menu-title">Manage AR/AP/Assign</div>
	        </a>
	        <ul>
			
	            <li> <a href="{{url('admin/assignacp/shipment/data')}}"><i class="bx bx-right-arrow-alt"></i>Assign Shipment</a></li>

	            <li> <a href="{{url('admin/assignacp/all/shipment')}}"><i class="bx bx-right-arrow-alt"></i>Assign Shipment List(AP)</a></li>
	            <li> <a href="{{url('admin/assignacp')}}"><i class="bx bx-right-arrow-alt"></i>Assign Shipment (AP)</a></li>

	            <li> <a href="{{url('admin/ar/assign/all/shipment')}}"><i class="bx bx-right-arrow-alt"></i>Assign Shipment List(AR)</a></li>
	            <li> <a href="{{url('admin/assign/ar')}}"><i class="bx bx-right-arrow-alt"></i>Assign Shipment (AR)</a></li>
	        </ul>
	    </li> -->
	    @endcan
	    <!--AR/AP End-->
	    <!--AR/AP Users-->
	     


	    <!--Roles-->
	    @can('role-list')
	    <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class="fadeIn animated bx bx-user-plus"></i>
	            </div>
	            <div class="menu-title">Manage Roles</div>
	        </a>
	        <ul>
	            <li> <a href="{{url('admin/roles')}}"><i class="bx bx-right-arrow-alt"></i>All Roles</a></li>
	            @can('role-create')
	            <!-- <li> <a href="{{url('admin/roles/create')}}"><i class="bx bx-right-arrow-alt"></i>Add New</a></li> -->
	            @endcan
	        </ul>
	    </li>
	    @endcan
	    <!--Roles End-->

	    <!--Agents-->
	    @can('uagent-list')
	    <!-- <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class="lni lni-users"></i>
	            </div>
	            <div class="menu-title">Manage Agent</div>
	        </a>
	        <ul>
	            @can('uagent-all')
	            <li> <a href="{{url('admin/assignuser/list')}}"><i class="bx bx-right-arrow-alt"></i>All Agent</a></li>
	            @endcan

	            <li> <a href="{{url('admin/assignuser')}}"><i class="bx bx-right-arrow-alt"></i>User Agent</a></li>
	            @can('uagent-create')
	            <li> <a href="{{url('admin/assignuser/add')}}"><i class="bx bx-right-arrow-alt"></i>Add New</a></li>
	            @endcan

	        </ul>
	    </li> -->
	    @endcan
	    
	    <!--Agents End-->
	    @can('activity-list')
	    <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class='bx bx-loader'></i></div>
	            <div class="menu-title">User Activity</div>
	        </a>
	        <ul>
	            <!-- <li> <a href="{{url('admin/new-activity')}}"><i class="bx bx-right-arrow-alt"></i>Activity</a>
	            </li> -->
	            <li> <a href="{{url('admin/user-activity')}}"><i class="bx bx-right-arrow-alt"></i>Activity</a>
	             </li>
	        </ul>
	    </li>
	    <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class='bx bx-cog'></i></div>
	            <div class="menu-title">Settings</div>
	        </a>
	        <ul>
	            <li> <a href="{{url('admin/homebase')}}"><i class="bx bx-right-arrow-alt"></i>Home-Setting</a>
	            </li>
	            <li> <a href="{{url('admin/setting/company-details')}}"><i class="bx bx-right-arrow-alt"></i>Setting</a>
	            </li>
	        </ul>
	    </li>
	    @endcan

	    




	    <!-- <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class='bx bx-download'></i></div>
	            <div class="menu-title">Document Manage</div>
	        </a>
	        <ul>
	            <li> <a href="{{ url('admin/doc/upload/data') }}"><i class="bx bx-right-arrow-alt"></i>Doc's</a>
	            </li>

	        </ul>
	    </li> -->

	    <!--report-->
	    @can('report')
	    <!-- <li>
	        <a href="{{url('admin/report')}}">
	            <div class="parent-icon"><i class='bx bx-file'></i></div>
	            <div class="menu-title">Report</div>
	        </a>
	    </li> -->


		<!-- <li>
	        <a href="javascript:void(0);" class="has-arrow">
	            <div class="parent-icon"><i class='bx bx-download'></i></div>
	            <div class="menu-title">Expense Manage</div>
	        </a>
	        <ul>
	            <li> <a href="{{ url('admin/user/expense') }}"><i class="bx bx-right-arrow-alt"></i>User</a>
	            </li>

				 <li> <a href="{{ url('admin/user/expense/assign') }}"><i class="bx bx-right-arrow-alt"></i>Assign User</a>
	            </li>

	        </ul>
	    </li> -->
	    @endcan
	    </ul>
	    <!--end navigation-->
	</div>
