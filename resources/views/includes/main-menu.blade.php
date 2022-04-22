    <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item {{ request()->is('home') ? 'active' : '' }}" data-menu="dropdown"><a class=" nav-link" href="#" ><i class="feather icon-home"></i><span data-i18n="Dashboard">Home</span></a>
                    </li>

                <li class="dropdown nav-item {{ request()->is('users/*') ? 'active' : '' }} {{ request()->is('users') ? 'active' : '' }}" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="feather icon-user"></i><span data-i18n="Dashboard">GX</span></a>
                    <ul class="dropdown-menu">
                        <li class="loader-active" data-menu=""><a class="dropdown-item" href="{{route('gx.kirim')}}" data-i18n="eCommerce" data-toggle="dropdown">Kirim</a>
                        </li>
                        <li class="loader-active" data-menu=""><a class="dropdown-item" href="#" data-i18n="eCommerce" data-toggle="dropdown">HubSpot</a>
                        </li>

                    </ul>
                </li>


                </li>
            </ul>
        </div>
        <!-- /horizontal menu content-->
    </div>
    <!-- END: Main Menu-->

    {{-- spinner --}}
    <div class="loading_sec_home" style="display: none;">
        <i class="fa fa-spinner fa-spin fa-3x"></i>
      </div>
    {{-- end spinner --}}
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
       $(document).ready(function(){
         $('.loader-active').click(function(){
            $('.loading_sec_home').show();
        });
    });
    </script>

