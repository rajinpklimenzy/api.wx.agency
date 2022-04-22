<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="wx">
    <title>Register </title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" href="https://www.wx.agency/hubfs/WX.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/login-register.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    <script>
        window.Userback = window.Userback || {};
        Userback.access_token = '3783|65108|joO0IGuxtmy9vBXjjARKh5s0WfPB00lw6wOMFeMUVGL4pwzibG';
        (function(d) {
            var s = d.createElement('script');s.async = true;
            s.src = 'https://static.userback.io/widget/v1.js';
            (d.head || d.body).appendChild(s);
        })(document);
    </script>
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0 pb-0">
                                    <div class="card-title text-center">
                                        <img width="70px" src="https://d1myhw8pp24x4f.cloudfront.net/company_logo/1572015127311_b_163.png" alt="wx logo">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Register with
                                            Email</span></p>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{{ route('register') }}" novalidate>
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="user-name" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="Username" autofocus>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="user-email" placeholder="First name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user-check"></i>
                                                </div>
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="user-email" placeholder="Last name" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user-check"></i>
                                                </div>
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="user-email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>
                                                <div class="form-control-position">
                                                    <i class="feather icon-mail"></i>
                                                </div>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                              <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control @error('mobile_no') is-invalid @enderror" id="mobile_no" placeholder="Mobile no" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no" autofocus>
                                                <div class="form-control-position">
                                                    <i class="feather icon-phone-call"></i>
                                                </div>
                                                @error('mobile_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <select  class="form-control @error('user_type') is-invalid @enderror" id="user_type" placeholder="User Type" name="user_type" value="{{ old('user_type') }}" required autocomplete="user_type" autofocus>
                                                    <option value="">Select</option>
                                                    <option value="3">Vendor</option>
                                                <option value="4">Freelancer</option>
                                                <option value="5">Full Time</option>
                                                </select>
                                                    <div class="form-control-position">
                                                    <i class="feather icon-phone-call"></i>
                                                </div>
                                                @error('user_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" name="password" class="form-control" id="user-password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                             <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" name="password_confirmation" class="form-control" id="user-password" placeholder="Confirmation Password" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary btn-block"><i class="feather icon-user"></i> Register</button>
                                        </form>
                                        <a href="{{url('login')}}" class="btn btn-outline-danger btn-block mt-2"><i class="feather icon-unlock"></i> Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/ui/breadcrumbs-with-stats.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/forms/form-login-register.js')}}"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->
</html>
