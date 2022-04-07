<!DOCTYPE html>
<html class="html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/favicfon.html" />

    <title>RECRUITMENT CHOICE</title> 

    <link rel="stylesheet" href="{{  asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/animate/animate.css') }}">
    <!-- theme css --> 
    <link rel="stylesheet" href="{{  asset('assets/frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/frontend/css/hover.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/frontend/css/effect.css') }}" >
    <link rel="stylesheet" href="{{  asset('assets/frontend/css/jquery.fancybox.css') }}" >

    <!-- Rev slider css -->
    <link href="{{ asset('assets/frontend/plugins/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/plugins/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/plugins/revolution/css/navigation.css') }}" rel="stylesheet">

    <!-- endinject -->
    <style>
        .active {
            color: #002945 !important;
        }
    </style>

</head>
<body>

        <!--================Header Area =================-->
        <header class="main_header_area menu_color">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                            <a href="#"><i class="fa fa-phone"></i>+ 1800-365-6548</a>
                            <a href="#"><i class="fa fa-envelope-o"></i><span class="__cf_email__">info@nationunite.com</span></a>
                            
                        </div>
                        <!-- <div class="pull-right">
                            <ul class="header_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ url('/') }}" style="text-align: center !important; font-size: 24px; font-weight: bold; color: black;" >RECRUITMENT CHOICE GROUP LTD</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                               <li class="dropdown submenu">
                                    <a href="{{ url('/') }}" class="dropdown-toggle">Home</a>
                                    
                                </li>
                                <li class="submenu dropdown">
                                    <a href="{{ url('/about-us') }}" class="dropdown-toggle">About Us</a>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="{{ url('/service') }}" class="dropdown-toggle">What We Do</a>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="{{ url('/job-search') }}" class="dropdown-toggle">Job Search</a>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                        <li><a href="{{ url('/our-team') }}">Join Our Team</a></li>
                                    </ul>
                                </li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" style="background-color: #A4F38B; border-radius: 20px; padding: 5px 20px; line-height: 30px;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recruitment<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/register-opt') }}">Get Hired</a></li>
                                        <li><a href="{{ url('/employers') }}">For Employers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        @yield('content')

 <!--================Footer Area =================-->
 <footer class="footer_area">
            
            <div class="footer_copyright">
                <div class="container-fluid">
                    <div class="footer_copyright_inner">
                        <div class="pull-left">
                            <p style="color: #fff;">© 2021 Recruitment Choice, All rights reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/privacy-policy') }}" style="color: #c5c5c5; text-decoration: underline">Privacy Policy</a></p>
                        </div>
                        <div class="pull-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
       


<!-- Start js -->
<script src="{{ asset('assets/frontend/js/jquery-2.2.4.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/owl.carousel/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

<!-- Start slider js -->
<script src="{{ asset('assets/frontend/js/nav.js') }}"></script>
<!-- theme js -->
<script src="{{ asset('assets/frontend/js/theme.js') }}"></script>
<!-- Start wow js -->
<script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
<!-- Start gallery js -->
<script src="{{ asset('assets/frontend/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/isotope.js') }}"></script>
<script src="{{ asset('assets/frontend/js/gallery.js') }}"></script>

<!-- end  -->
</body>
</html>