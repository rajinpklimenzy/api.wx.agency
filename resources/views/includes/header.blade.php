<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/extensions/toastr.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/toastr.css')}}">
<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}', 'Failed!', {"showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 2000});
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}', 'Success!', {"showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 2000});
        @endif
    });
</script>
 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="#">
                    <img class="brand-logo" alt="stack admin logo" width="50px" src="https://www.wx.agency/hubfs/WX%20Web%202019/logo.svg">
                        <h2 class="brand-text"></h2>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a></li>
                    </li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">

                    <li class="dropdown dropdown-notification nav-item">
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag badge badge-warning float-right m-0">4 New</span></h6>
                            </li>
                            <li class="scrollable-container media-list"><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar avatar-online avatar-sm rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Margaret Govan</h6>
                                            <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Bret Lezama</h6>
                                            <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="avatar avatar-online avatar-sm rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Carie Berra</h6>
                                            <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Eric Alsobrook</h6>
                                            <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                                                <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="{{route('home')}}" data-toggle="dropdown">
                            <div class="avatar avatar-online">
                                @if(Auth::user()->role_id==0)
                                <img src="https://d1myhw8pp24x4f.cloudfront.net/company_logo/1572015127311_b_163.png" alt="avatar">
                                @else
                                <img src="/uploads/admin-images/{{Auth::user()->profile_image ?? "1647231370.png"}}" alt="avatar">
                                @endif
                                <i></i></div><span class="user-name">{{ Auth::user()->first_name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                               <i class="feather icon-power"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


