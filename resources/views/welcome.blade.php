@extends('layouts.frontend.app')

@section('content')

<!--================Slider Area =================-->
<section class="main_slider_area">
            <div id="main_slider5" class="rev_slider" data-version="5.3.1.6">
                <ul> 
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-1.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/frontend/img/home-slider/bg-4.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            id="slide-1592-layer-1" 
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['210','210','210','210','130']" 
                            data-fontsize="['55','55','55','40','30']"
                            data-lineheight="['59','59','59','50','40']"
                            data-width="['550','550','550','400']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']"></div>

                            <div class="tp-caption tp-resizeme slider_button" 
                            id="slide-1594-layer-3" 
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['435','435','435','435','330']" 
                            data-fontsize="['14','14','14','14']"
                            data-lineheight="['46','46','46','46']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">
                            <a class="main_btn hvr-bounce-to-right" href="{{ url('/service') }}">What We Do</a>
                            <a class="main_b_btn hvr-bounce-to-right" href="{{ url('/about-us') }}">Learn More</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->


        <!-- Start why choose section -->
        <section class="why-choose_area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center" style="color: black;">Welcome to  Recruitment Choice </h2>
                        <p>
                            Recruitment Choice is a specialist recruitment consultancy for those seeking employees and those seeking employment in a wide range of trade industries across the UK, hence the name Recruitment Choice. We are a relatively new company, however we come with a team who have a proven track record of providing optimal recruitment solutions for our employers, and capable candidates seeking work.
                        </p>
                        <br>

                        <h3>Why Recruitment Choice? </h3>
                        <br>
                        <p>
                            Quite simply: we pride ourselves on the principals of QEQI; quick efficient and quality integration. 
                        </p>
                        <br>

                        <h3>What does this mean? </h3>
                        <br>
                        <p>
                            Employers – Do you need support? We quickly find quality and capable candidates for you as soon as possible

                        </p>                        <br>
                        <p>
                            Candidates – Do you need work? We quickly find you your best suited roles with trustworthy and reliable companies fast!
                        </p>
                        <br>
                        <p>
                            We are a private, independent consultancy who pride ourselves of being the forefront of helping the public. Whether you are beginning your career, fairly established within your trade, or just seeking additional sources of income to supplement your financial needs, we are here to help.
                        </p>
                        <br>
                        <p>
                            We have created strong client partnerships with some of the UK’s most reputable companies, contractors. However, we are also here to support small to medium companies who are looking to build up their workforce.
                        </p>

                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End why choose section -->


                <!--================service Box Area =================-->
        <section class="service_box_area">
            <div class="container">
                <div class="sec_middle_title">
                    <h2>SECTORS WE RECRUIT FOR </h2>
                    {{-- <p>Construction, Hospitality,  Customer service,  Courier, Cleaners</p> --}}
                </div>
                <div class="row service_item_inner">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/construction.jpg') }}" width="358" height="275" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Construction</h4></a>
                                    <div class="service_text">

                                        <p>Plumber | Electrician | Carpenter | Painter | plus many more </p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            @if(1==2)
                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-2.jpg') }}" width="358" height="275" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>PRIME RESIDENTIAL </h4></a>
                                    <div class="service_text">

                                        <p>Main Contractor | Developers | Private Clients | Basement Contractor | Sepecialist Contractor | Private Practice</p>
                                    </div>
                                </div>
                            </div><!-- /item -->
                            @endif

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/hospitality.jpg') }}" width="358" height="275" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Hospitality </h4></a>
                                    <div class="service_text">

                                        <p>Restaurants | Events | Hotels | Pubs | plus many more</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/customer_service.jpg') }}" width="358" height="275" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Customer service</h4></a>
                                    <div class="service_text">

                                        <p>Retail | Call centres | Plus many more establishments </p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                             <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/courier.jpg') }}" width="358" height="275" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Courier</h4></a>
                                    <div class="service_text">

                                        <p> Logistics | Parcel delivery | Food and beverage distribution and many more</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/cleaner.jpg') }}" width="358" height="275" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Cleaners</h4></a>
                                    <div class="service_text">

                                        <p>Offices | Hotels | Events | Nightclubs | plus many more</p>
                                    </div>
                                </div>
                            </div><!-- /item -->

                            @if(1==2)
                            <div class="item">
                                <div class="service_box_item">
                                    <a href="#" class="service_image">
                                        <img src="{{ asset('assets/frontend/img/service/service-7.jpg') }}" width="358" height="275" alt="">
                                    </a>
                                    <a href="#" style="text-align: center;"><h4>Building Services</h4></a>
                                    <div class="service_text">

                                        <p>M&E Specialist Subcontractors  |  Main Contracting In-House M&E  |  M&E Consultancy</p>
                                    </div>
                                </div>
                            </div><!-- /item -->
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Business Box Area =================-->



        <section class="helpline_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>You can always reach us via our contact us page!<h2>
                        <h4>
                            We look forward to partnering with you!
                        </h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- End helping area -->

@endsection
