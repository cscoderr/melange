@extends('layouts.frontend.app')

@section('content')
        <!--================Banner Area =================-->
        <section class="banner_area_plane">
            <div class="container">
                <div class="banner_content">
                    <h3>About Us</h3>
                </div>
            </div>
        </section>
        <div class="banner_link">
            <div class="container">
                <div class="b_crum_link_inner">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about-us') }}">About Us</a>
                </div>
            </div>
        </div>
        <!--================End Banner Area =================-->
        
        <!--================Our About Area =================-->
        <section class="our_about_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="our_about_left_content">
                            
                            <h2>Welcome to Wide Nation recruitment </h2>
                            <p>We say we are a new company with old experience.  By that we say, we have a team of individuals with expertise in recruitment spanning over 35 years collectively. More importantly, we have the passion for what we do. Our team have collectively placed over 5,000 candidates into new temporary, part-time, full-time, contract and permanent roles with more than 800 employers. Are mission is to continue this track record with Wide Nation.</p>
                            <p>We pride ourselves on maintaining our core principals and values to become one of the most trusted recruitment partners to all our customers. Our core values are Integrity, Professionalism, Partnership, and Pride. We are proud to have a team full of individuals who maintains these values, because we believe in building lasting partnerships with our clients and candidates throughout their careers. </p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our About Area =================-->

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