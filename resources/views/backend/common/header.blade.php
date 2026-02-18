<header>
    <style>
        ul#clock_in_out button {
            padding: 3px 6px;
            box-shadow: unset !important;
            font-size: 11px;
            margin: 0px 5px;
        }
    </style>
    <?php
    // $ip = getenv("REMOTE_ADDR") ;
    // $ipchecker =   App\Models\IpChecker::where('ip_address', $ip)->where('whitelisted', 1)->first();
    //  dd($ipchecker);
    
    //     if($ipchecker == null){
    //         Session::flush();
    //         return  Route::resource('login', 'LoginController');
    //     }
    
    // for logout if user inactive
    // $session_id = Session::all();
    // $authstatus = Auth::user()->status ;
    // $url = url('login');
    // if ($authstatus == 0){
    //     Session::flush();
    //     return  Route::resource('login', 'LoginController');
    // }
    ?>

    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="number" class="form-control" id="referenc" placeholder="Load Referenc...">
                    <span class="position-absolute top-50 search-show translate-middle-y"> </span>
                    <span class="position-absolute top-50 translate-middle-y search_icon"><i
                            class='bx bx-search'></i></span>
                </div>
            </div>

            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center" id="clock_in_out">
                    {{-- start work of timer  --}}
                    <table class="table mb-0">
                        <tbody>
                            @php

                                $userid = Auth::id();
                                date_default_timezone_set('America/New_York');
                            @endphp
                        </tbody>
                    </table>
                    {{-- end work of timer --}}
                    <div class="dropdown-menu dropdown-menu-end notification_box" id="another-element"data-hide="hide">
                        <a href="javascript:void(0);">
                            <div class="msg-header">
                                <p class="msg-header-title">Notifications</p>
                                <p class="msg-header-clear ms-auto" id="AllReadNotification"
                                    value="{{ Auth::id() }}">Read All</p>
                            </div>
                        </a>

                        <div class="header-notifications-list">



                            <li class="nav-item dropdown dropdown-large">
                                <div class="message nav-link -toggle dropdown-toggle-nocaret position-relative"
                                    href="javascript:void(0);" role="button" id="" aria-expanded="false">
                                    <span class="alert-count">
                                        11
                                    </span>
                                    <i class="bx bx-message"></i>
                                </div>


                                <div class="dropdown-menu dropdown-menu-end message_box" id="another-element"
                                    data-hide="hide" style="display: none;">
                                    <a href="javascript:void(0);">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Messages</p>
                                            <!--<p class="msg-header-clear ms-auto">Read All</p>-->
                                            <p class="msg-header-clear ms-auto" id="AllReadMessageNotification"
                                                value="{{ Auth::id() }}">Read All</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list ps">


                                        <div class="noti-list" status=" " id="CarrierRequest_col" value=" ">
                                            <a href="javascript:void(0)">
                                                <h6> <i class="bx bx-group"></i>
                                                    <span class="msg-time float-end" id="notificationsRead"
                                                        value=""><b>MC:</b>22 <b>Comment:</b>hwpp...</span>
                                                </h6>
                                            </a> <i class="bx bx-check"></i>
                                        </div>

                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                                            </div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
                                            </div>
                                        </div>






                                        <div class="noti-list" status=" " id="loadComment_col" value=" ">
                                            <a href="javascript:void(0)">
                                                <h6> <i class="bx bx-group"></i> <span class="msg-time float-end"
                                                        id="notificationsRead" value=""><b>Referenc:</b>
                                                        <b>Comment:</b> </span></h6>
                                            </a>
                                        </div>

                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                                            </div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
                                            </div>
                                        </div>



                                        <a href="{{ url('admin/notification/messsage') }}">
                                            <div class="text-center msg-footer"> View All Notifications</div>
                                        </a>
                                    </div>
                            </li>

                            <li class="nav-item dropdown dropdown-large">

                                {{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                                        
                                                        <i class='bx bx-comment'></i>
                                                        
                                                    </a> --}}

                                <div class="dropdown-menu dropdown-menu-end">

                                    <a href="javascript:;">

                                        <div class="msg-header">

                                            <p class="msg-header-title">Messages</p>

                                            <p class="msg-header-clear ms-auto">Read All</p>

                                        </div>

                                    </a>

                                    <div class="header-message-list">

                                        <a class="dropdown-item" href="javascript:;">

                                            <div class="d-flex align-items-center">

                                                <div class="user-online">
                                                    @php
                                                        $img = ADMIN_FACKIMG_PATH;
                                                    @endphp

                                                    <img src="{{ $img }}" class="msg-avatar"
                                                        alt="user avatar">

                                                </div>

                                                <div class="flex-grow-1">

                                                    <h6 class="msg-name">Daisy Anderson <span
                                                            class="msg-time float-end">5 sec

                                                            ago</span></h6>

                                                    <p class="msg-info">The standard chunk of lorem</p>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                    <a href="javascript:;">

                                        <div class="text-center msg-footer">View All Messages</div>

                                    </a>

                                </div>

                            </li>

                </ul>
            </div>

            <div class="user-box dropdown">
               @php
                    $userid = Auth::id();
                    $userdata = App\Models\User::where('id', $userid)->first();
                    $userdetail = App\Models\Userdetail::where('userid', $userid)->first();
                    $img = '1';
                    if (!empty($userdetail->profile_pic)) {
                        $imga = $userdetail->profile_pic;
                    
                        $img = url('public/user-pic/') . '/' . $imga;
                    } else {
                        $img = ADMIN_FACKIMG_PATH;
                    }
                    $profile_type = $userdata->user_type;
                
                    $image = '1';
                    if (!empty($userdetail->profile_pic)) {
                        $image = url('public/user-pic/') . '/' . $userdetail->profile_pic;
                    }
                @endphp

                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ $img }}" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0"> {{ Auth::user()->name }}</p>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end profile_dropdown">
                    <div class="user-header">
                        <img src="{{ $img }}" class="user-img" alt="user avatar">
                        <p class="user-name mb-0"> {{ Auth::user()->name }}</p>
                    </div>

                    <div class="user-body row">
                        <div class="col-md-4 text-center">
                            <a href="#">Activities</a>
                        </div>
                        <div class="col-md-4 text-center">
                            @php
                                $userid = base64_encode(Auth::id());
                            @endphp
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="#">Lock</a>
                        </div>
                    </div>

                    <div class="user-footer">
                        <a href="{{ route('logout') }}" class="btn-right"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                            Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a href="{{ url('admin/profile') }}">Update Profile</a>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</header>

<script>
    $(".notification").click(function() {
        $(".notification_box").toggle();
    })
    $(".message").click(function() {
        $(".message_box").toggle();
    })
</script>
