@extends('layouts.frontend.app')

@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area_plane">
            <div class="container">
                <div class="banner_content">
                    <h3>Contact Us</h3>
                </div>
            </div>
        </section>
        <div class="banner_link">
            <div class="container">
                <div class="b_crum_link_inner">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/contact-us') }}">Contact Us</a>
                </div>
            </div>
        </div>
        <!--================End Banner Area =================-->
        
        <!--================Contact Us Area =================-->
        <section class="contact_us_area">
            <div class="container">
                <div class="contact_us_inner">
                    <div class="section_title">
                        <h2>Connect with Recruiters and Career Resources </h2>
                        <p>Here at Recruitment Choice, we aim to fulfil any requests in regards to recruitment, please feel free to get in touch with any of your needs!</p>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <form class="contact_us_form" action="https://codifystudioz.com/cs-theme/movers/inc/sendemail.php">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
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
        <!--================End Contact Us Area =================-->
        
        <!--================Map Area =================-->
@endsection