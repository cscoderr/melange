@extends('layouts.frontend.app')

@section('content')
        
        <!--================Banner Area =================-->
        <section class="banner_area_plane">
            <div class="container">
                <div class="banner_content">
                    <h3>Join Our Team</h3>
                </div>
            </div>
        </section>
        <div class="banner_link">
            <div class="container">
                <div class="b_crum_link_inner">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/career') }}">Join Our Team</a>
                </div>
            </div>
        </div>
        <!--================End Banner Area =================-->
        
        <!--================Carrers Area =================-->
        <section class="carrers_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section_title">
                            <h2>Recruitment Choice are hiring.</h2>
                            <p>As an expanding company with great goals which we will undoubtably achieve, we are constantly looking viable individuals whose expertise will be welcomed within our workforce.</p>
                            <p>If you feel that you have the necessary skills or a recruitment consultant and want to just us a trainee or experienced consultant, please do not hesitate to get in touch at by completing the form below and we will get back to you.</p>
                            <br>
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
                                        <input type="tel" class="form-control" id="contact-number" name="number" placeholder="Contact Number">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="summary" id="summary" rows="1" placeholder="Brief summary of experience and work history"></textarea>
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
        
@endsection