@extends('layouts.frontend.app')

@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area_plane">
            <div class="container">
                <div class="banner_content">
                    <h3>Employers</h3>
                </div>
            </div>
        </section>
        <div class="banner_link">
            <div class="container">
                <div class="b_crum_link_inner">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/employers') }}">Employers</a>
                </div>
            </div>
        </div>
        <!--================End Banner Area =================-->
        
        <!--================Carrers Area =================-->
        <section class="carrers_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title">
                            <h2>Recruitment services on demand </h2>
                                {{-- <p>We endeavour to create the world’s greatest recruitment experience, that means we need you on board. Whatever your needs are, we will cover them.</p> --}}

                                <p>Integrity – We strive to do the right thing by putting our customers first </p>

                                <p>Efficiency – aim on providing outstanding service so you can sit back, knowing that your recruitment service is in the best hands</p>

                                <p>Passion – We as a team are driven by one thing, and that is passion for what we do, which means everything we do, is at the heart and mind of our clients and customers</p>

                                <p>Excellence</p>
                                <!-- <br> -->
                                {{-- <p>We do both on-site or remote recruitment.</p> --}}
                        </div>
                        <div class="section_title">
                            <h2>WHY PARTNER WITH RECRUITMENT CHOICE </h2>
                                <p>We endeavour to create the world’s greatest recruitment experience, that means we need you on board. Whatever your needs are, we will cover them.</p>

                                <p>If you are looking for your next temporary or permanent employee to support a major project or help cover workloads, Recruitment Choice will find the most suitable candidate for you. Our team have been matching the talented, dedicated and skilled with employers for over 35 years and this will continue with Recruitment Choice. We will find the right candidate in your field and take the pressure off an internal recruitment headache! We bridge the unfriendly gap between employer and employee so you can sit back while we do the work. Our specialist recruitment sectors include construction, general labour hospitality, customer service, courier. </p>
                                <!-- <br> -->
                                <p>We do both on-site or remote recruitment.</p>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <h2>TELL US ABOUT YOUR VACANCY</h2>
                                <br>
                                <form class="contact_us_form" action="https://codifystudioz.com/cs-theme/movers/inc/sendemail.php">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                     <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="company" name="company" placeholder="Company">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Tell us about the role:"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="button" name="" value="Submit" class="theme-btn btn-md hvr-bounce-to-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </section>
        <!--================End Carrers Area =================-->
        <section class="service_box_area">
            <div class="container">
                <div class="sec_middle_title">
                    <h2>SECTORS WE RECRUIT FOR </h2>
                    <p>Construction, Hospitality,  Customer service,  Courier, Cleaners</p>
                </div>
                <div class="row service_item_inner">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-1.jpg') }}" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>MAIN CONTRACTING / DEVELOPERS</h4></a>
                                    <div class="service_text">

                                        <p>Major Projects | Regional Contracting | Developers (Affordable | Private) | Modular Build | Data Centres</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-2.jpg') }}" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>PRIME RESIDENTIAL </h4></a>
                                    <div class="service_text">

                                        <p>Main Contractor | Developers | Private Clients | Basement Contractor | Sepecialist Contractor | Private Practice</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-3.jpg') }}" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>INTERIORS </h4></a>
                                    <div class="service_text">

                                        <p>Commercial Fit Out (Traditional D&B) | Specialist Contractors (Ceilings,  Partitions Drylining, Joinery) | Shopfitting & Retails</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-4.jpg') }}" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Facades and External Envelopes</h4></a>
                                    <div class="service_text">

                                        <p>Cladding  | Curtain Walling  |  Structural Glazing  |  Rainscreen  |  Precast Concrete</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                             <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-5.jpg') }}" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>FM and Maintenance</h4></a>
                                    <div class="service_text">

                                        <p>Building Services (MEP) Maintenance  |  Facilities Management  |  Building Maintenance</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-6.jpg') }}" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Infrastructure</h4></a>
                                    <div class="service_text">

                                        <p>Highways | Rail | Communications | Civil Engineering</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-7.jpg') }}" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Building Services</h4></a>
                                    <div class="service_text">

                                        <p>M&E Specialist Subcontractors  |  Main Contracting In-House M&E  |  M&E Consultancy</p>
                                    </div>
                                </div>
                            </div><!-- /item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection