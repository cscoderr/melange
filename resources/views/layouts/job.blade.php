<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{ config('app.name') }} - Job Search</title>

<!-- Stylesheets -->
<link href="{{ asset('assets/job/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/job/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/job/css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js') }}"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('assets/job/js/respond.js') }}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Header Span -->
    <span class="header-span"></span>
    
    <!-- Main Header-->
    <header class="main-header">
        
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="navbar">
                <div class=""><a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="" title=""></a></div>
                <nav class="nav main-menu justify-content-end">
                    <ul class="navigation" id="navbar">
                        <li>
                            <a href="{{ url('/') }}" style="color: black; font-size: 15px; font-weight: 600;">HOME</a>
                        </li>
                        <li>
                            <a href="{{ url('/about-us') }}" style="color: black; font-size: 15px; font-weight: 600;">ABOUT US</a>
                        </li>
                        <li>
                            <a href="{{ url('/service') }}" style="color: black; font-size: 15px; font-weight: 600;">WHAT WE DO</a>
                        </li>
                        <li>
                            <a href="{{ url('/job-search') }}" style="color: black; font-size: 15px; font-weight: 600;">JOB SEARCH</a>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px; font-weight: 600;">CONTACT<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ url('/our-team') }}">Join Our Team</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px; font-weight: 600;">RECRUITMENT<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/register-opt') }}">Get Hired</a></li>
                                <li><a href="{{ url('/employers') }}">For Employers</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Main Menu End-->
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="navbar">
                <div class=""><a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="" title=""></a></div>
                <nav class="nav main-menu justify-content-end">
                    <ul class="navigation" id="navbar">
                        <li>
                            <a href="{{ url('/') }}" style="color: black; font-size: 15px; font-weight: 600;">HOME</a>
                        </li>
                        <li>
                            <a href="{{ url('/about-us') }}" style="color: black; font-size: 15px; font-weight: 600;">ABOUT US</a>
                        </li>
                        <li>
                            <a href="{{ url('/service') }}" style="color: black; font-size: 15px; font-weight: 600;">WHAT WE DO</a>
                        </li>
                        <li>
                            <a href="{{ url('/job-search') }}" style="color: black; font-size: 15px; font-weight: 600;">JOB SEARCH</a>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px; font-weight: 600;">CONTACT<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ url('/our-team') }}">Join Our Team</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 15px; font-weight: 600;">RECRUITMENT<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/register-opt') }}">Get Hired</a></li>
                                <li><a href="{{ url('/employers') }}">For Employers</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--Nav Box-->
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <br>
    <section class="page-title">
        <div class="auto-container">
            <div class="title-outer">
                <h1>Job Search</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Jobs</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Listing Section -->
    <section class="ls-section">
        <div class="auto-container">
            <div class="filters-backdrop"></div>
            
            <div class="row">

                <!-- Filters Column -->
                @if(1==2)
                <div class="filters-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="filters-outer">
                            <button type="button" class="theme-btn close-filters">X</button>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Search by Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="listing-search" placeholder="Job title, keywords, or company">
                                    <span class="icon flaticon-search-3"></span>
                                </div>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Location</h4>
                                <div class="form-group">
                                    <input type="text" name="listing-search" placeholder="City or postcode">
                                    <span class="icon flaticon-map-locator"></span>
                                </div>
                                <p>Radius around selected destination</p>
                                <div class="range-slider-one">
                                    <div class="area-range-slider"></div>
                                    <div class="input-outer">
                                        <div class="amount-outer"><span class="area-amount"></span>km</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Category</h4>
                                <div class="form-group">
                                    <select class="chosen-select">
                                        <option>Choose a category</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Industrial</option>
                                        <option>Apartments</option>
                                    </select>
                                    <span class="icon flaticon-briefcase"></span>
                                </div>
                            </div>

                            <!-- Switchbox Outer -->
                            <div class="switchbox-outer">
                                <h4>Job type</h4>
                                <ul class="switchbox">
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                            <span class="title">Freelance</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Full Time</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Internship</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Part Time</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            <span class="title">Temporary</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <!-- Checkboxes Ouer -->
                            <div class="checkbox-outer">
                                <h4>Date Posted</h4>
                                <ul class="checkboxes">
                                    <li>
                                        <input id="check-f" type="checkbox" name="check">
                                        <label for="check-f">All</label>                              
                                    </li>
                                    <li>
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Last Hour</label>                                
                                    </li>
                                    <li>
                                        <input id="check-b" type="checkbox" name="check">
                                        <label for="check-b">Last 24 Hours</label>                                
                                    </li>
                                    <li>
                                        <input id="check-c" type="checkbox" name="check">
                                        <label for="check-c">Last 7 Days</label>                                
                                    </li>
                                    <li>
                                        <input id="check-d" type="checkbox" name="check">
                                        <label for="check-d">Last 14 Days</label>                                
                                    </li>
                                    <li>
                                        <input id="check-e" type="checkbox" name="check">
                                        <label for="check-e">Last 30 Days</label>                                
                                    </li>
                                </ul>
                            </div>

                            <!-- Checkboxes Ouer -->
                            <div class="checkbox-outer">
                                <h4>Experience Level</h4>
                                <ul class="checkboxes square">
                                    <li>
                                        <input id="check-ba" type="checkbox" name="check">
                                        <label for="check-ba">All</label>                                
                                    </li>
                                    <li>
                                        <input id="check-bb" type="checkbox" name="check">
                                        <label for="check-bb">Internship</label>                                
                                    </li>
                                    <li>
                                        <input id="check-bc" type="checkbox" name="check">
                                        <label for="check-bc">Entry level</label>                                
                                    </li>
                                    <li>
                                        <input id="check-bd" type="checkbox" name="check">
                                        <label for="check-bd">Associate</label>                                
                                    </li>
                                    <li>
                                        <input id="check-be" type="checkbox" name="check">
                                        <label for="check-be">Mid-Senior level4</label>                                
                                    </li>
                                    <li>
                                        <button class="view-more"><span class="icon flaticon-plus"></span> View More</button>
                                    </li>
                                </ul>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Salary</h4>

                                <div class="range-slider-one salary-range">
                                    <div class="salary-range-slider"></div>
                                    <div class="input-outer">
                                        <div class="amount-outer">
                                            <span class="amount salary-amount">
                                                $<span class="min">0</span>
                                                $<span class="max">0</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Filter Block -->
                            <div class="filter-block">
                                <h4>Tags</h4>
                                <ul class="tags-style-one">
                                    <li><a href="#">app</a></li>
                                    <li><a href="#">administrative</a></li>
                                    <li><a href="#">android</a></li>
                                    <li><a href="#">wordpress</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">react</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                        <!-- ls Switcher -->
                        <div class="ls-switcher">
                            <div class="showing-result">
                                <div class="text">Showing <strong>1-{{count($jobs)}}</strong> of <strong>{{count($jobs)}}</strong> jobs</div>
                            </div>
                            <div class="sort-by">
                                <select class="chosen-select">
                                    <option>New Jobs</option>
                                    @if(1 == 2)
                                        <option>Freelance</option>
                                        <option>Full Time</option>
                                        <option>Internship</option>
                                        <option>Part Time</option>
                                        <option>Temporary</option>
                                    @endif
                                </select>
                            </div>
                        </div>


                        <!-- Job Block -->
                        @if(isset($jobs))
                            @foreach ($jobs as $job)
                                <div class="job-block">
                                    <div class="inner-box">
                                        <div class="content">
                                            {{-- <span class="company-logo"><img src="images/resource/company-logo/1-1.png" alt=""></span> --}}
                                            <h4><a href="{{ url('job-modal') }}" class="call-modal" data-id="{{ $job->hid }}">{{ $job->job_title }}</a></h4>
                                            <ul class="job-info">
                                                <li><span class="icon flaticon-map-locator"></span>{{ $job->location }}</li>
                                                <li><span class="icon flaticon-money"></span> {{ $job->salary_range }}</li>
                                            </ul>
                                            <ul class="job-other-info">
                                                <li class="time">{{ $job->hour }}</li>
                                                <li class="required">{{ ucwords($job->language) }}</li>
                                                <li class="privacy">{{ ucwords($job->sector)}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                        <div class="job-block">
                            <div class="inner-box">
                                <div class="content">
                                    <h4><a href="#">No Job Available</a></h4>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Job Block -->
                        


                       <!-- Listing Show More -->
                       @if(1==2)
                        <div class="ls-show-more">
                            <p>Showing 36 of 497 Jobs</p>
                            <div class="bar"><span class="bar-inner" style="width: 40%"></span></div>
                            <button class="show-more">Show More</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Listing Page Section -->

    

    <!-- Main Footer -->
    <footer class="main-footer alternate5">
        <div class="auto-container"></div>
        

        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="copyright-text">© 2021 Widenation Recruitment Ltd, All rights reserved.</div>
                </div>
            </div>
        </div>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    </footer>
    <!-- End Main Footer -->



</div><!-- End Page Wrapper -->

<script src="{{ asset('assets/job/js/jquery.js') }}"></script> 
<script src="{{ asset('assets/job/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/job/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/job/js/chosen.min.js') }}"></script>
<script src="{{ asset('assets/job/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/job/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/job/js/jquery.modal.min.js') }}"></script>
<script src="{{ asset('assets/job/js/mmenu.polyfills.js') }}"></script>
<script src="{{ asset('assets/job/js/mmenu.js') }}"></script>
<script src="{{ asset('assets/job/js/appear.js') }}"></script>
<script src="{{ asset('assets/job/js/owl.js') }}"></script>
<script src="{{ asset('assets/job/js/wow.js') }}"></script>
<script src="{{ asset('assets/job/js/script.js') }}"></script>

</body>

</html>


