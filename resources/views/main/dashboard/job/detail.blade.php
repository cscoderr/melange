@extends('layouts.app')

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-breadcrumb-content">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="job-listing.html">Jobs Listing</a></li>
                        <li>Senior PHP Web Developer</li>
                    </ul>
                    <h1>Senior PHP Web Developer</h1>
                </div>
                <div class="job-meta-detail">
                    <ul>
                        <li class="posted">
                            <i class="lnr lnr-clock"></i>
                            <span class="text">Posted date: </span>
                            <span class="time">8 months ago </span>
                        </li>
                        <li class="expries">
                            <i class="lnr lnr-hourglass"></i>
                            <span class="text">Expries in: </span>
                            <span class="date theme-color"> October 26, 2019 </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Start -->

<!-- Job Meta Detail Box Section Start -->
<div class="job-meta-detail-box section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row no-gutters">

            <div class="col-lg-4 col-md-6">
                <!-- Single Meta Field Start -->
                <div class="single-meta-field">
                    <div class="field-label">
                        <i class="lnr lnr-map-marker"></i>
                        <span>Work Location: </span>
                    </div>
                    <div class="field-value">Chicago, Illinois</div>
                </div>
                <!-- Single Meta Field Start -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Single Meta Field Start -->
                <div class="single-meta-field">
                    <div class="field-label">
                        <i class="lnr lnr-thumbs-up"></i>
                        <span>Salary </span>
                    </div>
                    <div class="field-value salary">$500 - $1,000 / month</div>
                </div>
                <!-- Single Meta Field Start -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Single Meta Field Start -->
                <div class="single-meta-field">
                    <div class="field-label">
                        <i class="lnr lnr-briefcase"></i>
                        <span>Type </span>
                    </div>
                    <div class="field-value"><a class="fw-600" href="#">Part Time</a></div>
                </div>
                <!-- Single Meta Field Start -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Single Meta Field Start -->
                <div class="single-meta-field">
                    <div class="field-label">
                        <i class="lnr lnr-tag"></i>
                        <span>Category </span>
                    </div>
                    <div class="field-value"><a href="#">Accounting</a></div>
                </div>
                <!-- Single Meta Field Start -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Single Meta Field Start -->
                <div class="single-meta-field">
                    <div class="field-label">
                        <i class="lnr lnr-graduation-hat"></i>
                        <span>Experience </span>
                    </div>
                    <div class="field-value"><a href="#">> 5 years</a></div>
                </div>
                <!-- Single Meta Field Start -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Single Meta Field Start -->
                <div class="single-meta-field">
                    <div class="field-label">
                        <i class="lnr lnr-layers"></i>
                        <span>Skills </span>
                    </div>
                    <div class="field-value">
                        <div class="job-skill-tag">
                            <a href="#">CSS</a>
                            <a href="#">PHP</a>
                            <a href="#">WordPress</a>
                        </div>
                    </div>
                </div>
                <!-- Single Meta Field Start -->
            </div>

        </div>
    </div>
</div>
<!-- Job Meta Detail Box Section End -->

<!-- Job Details Section Start -->
<div class="job-details-section section pt-120 pt-lg-100 pt-md-80 pt-sm-50 pt-xs-40 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 order-lg-2 order-2 mt-sm-60 mt-xs-50">
                <div class="sidebar-wrapper-three">
                    <div class="common-sidebar-widget sidebar-three">
                        <div class="sidebar-job-apply">
                            <div class="action-button">
                                <a class="ht-btn text-center" href="#">Apply now <i class="ml-10 mr-0 fa fa-paper-plane"></i></a>
                                <span>Or Apply With</span>
                                <div class="line"></div>
                                <a class="ht-btn facebook-btn text-center" href="#">Apply With Facebook <i class="ml-10 mr-0 fab fa-facebook-f"></i></a>
                                <a class="ht-btn linkedin-btn text-center" href="#">Apply With Linkedin <i class="ml-10 mr-0 fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="common-sidebar-widget sidebar-three">
                        <div class="sidebar-job-share">
                            <div class="job-share">
                                <ul>
                                    <li><a href="#"><i class="lnr lnr-heart"></i> <span class="text">Save </span></a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> <span class="text">Share </span></a>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-warning"></i> <span class="text">Report </span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="common-sidebar-widget sidebar-three">
                        <div class="sidebar-job-employer">
                            <div class="job-employer-widget">
                                <div class="image">
                                    <img src="assets/images/companies_logo/logo-3.jpg" alt="">
                                </div>
                                <div class="content-box">
                                    <p class="location">
                                        <i class="lnr lnr-map-marker"></i>
                                        Hanoi, Hà Nội
                                    </p>
                                    <h4 class="title">
                                        <a href="#">InwaveThemes </a><i class="fas fa-check-circle"></i>
                                    </h4>
                                    <div class="employer-rate">
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="text">5 Ratings </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-sidebar-widget sidebar-three">
                        <h2 class="sidebar-title">Location</h2>
                        <div class="sidebar-map">
                            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="common-sidebar-widget sidebar-three">
                        <h2 class="sidebar-title">Recent Jobs By This Employer</h2>
                        <div class="sidebar-job">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Single Job Start  -->
                                    <div class="single-job style-two">
                                        <div class="info-top">
                                            <div class="job-info">
                                                <div class="job-info-inner">
                                                    <div class="job-info-top">
                                                        <div class="title-name">
                                                            <h5 class="job-title">
                                                                <a href="#">Chief Accountant</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="job-meta-two flex-wrap">
                                                        <div class="field-salary_from">
                                                            <i class="gj-icon gj-icon-money"></i>
                                                            $500 - $1,000 / month
                                                        </div>
                                                        <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                        <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Job End -->
                                </div>

                                <div class="col-lg-12">
                                    <!-- Single Job Start  -->
                                    <div class="single-job style-two">
                                        <div class="info-top">
                                            <div class="job-info">
                                                <div class="job-info-inner">
                                                    <div class="job-info-top">
                                                        <div class="title-name">
                                                            <h5 class="job-title">
                                                                <a href="#">Senior Data Engineer</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="job-meta-two flex-wrap">
                                                        <div class="field-salary_from">
                                                            <i class="gj-icon gj-icon-money"></i>
                                                            $500 - $1,000 / month
                                                        </div>
                                                        <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                        <div class="field-map"><i class="lnr lnr-map-marker"></i>Chicago, Illinois</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Job End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-sidebar-widget sidebar-three">
                        <div class="sidbar-image">
                            <a href="#">
                                <img src="assets/images/banner/ads-two.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-lg-1 order-1 pr-55 pr-md-15 pr-sm-15 pr-xs-15">

                <div class="job-detail-content">
                    <div class="field-descriptions mb-60 mb-sm-30 mb-xs-30">
                        <p>We are Looking for a skilled Ul/UX designer for our&nbsp;&nbsp;as&nbsp;&nbsp;product which includes a responsive web application, an Android app and an rOS app. Our ideal candidate should have the ability to turn client’s visions into intuitive designs.</p>

                        <h3>Job Description</h3>

                        <ul>
                            <li>To interact with <strong>US Design Team</strong> in developing elesig-nsfiuvireframes in order to meet feature requirements in new/existing software systems.</li>
                            <li>To provide graphics and styles for the design of wirefrarnes.</li>
                            <li>To track daily progress and communicate changes (and their impact) to management team</li>
                            <li>To work with project teams to create the best possible application design, understanding our clients’ requirements and users’ needs. Projects may be any combination of web, applications, and mobile.</li>
                        </ul>

                        <h3>Your Skills and Experience</h3>

                        <p><strong>Your Experience and Qualifications</strong></p>

                        <ul>
                            <li>1-3 years of Ul/UX design experience for software, web apps and/or mobiLe devices.</li>
                            <li>Mastery of core design concepts (composition &amp; Layout, coLor theory, typography, etc).</li>
                            <li>Wire framing and Light technicaL documentation,</li>
                            <li>Experience with user interface and visual design patterns.</li>
                            <li>AbiLity to take a design from concept to wireframe to pixel perfect</li>
                            <li>Understanding of the iterative design process.</li>
                            <li>AbiLity to collaborate and take input from others and learn quickLy.</li>
                            <li>AbiLity to clearly communicate and work with opinionated individuaLs.</li>
                            <li>Understand the technicaL feasibfLities of both web and mobile.</li>
                            <li>AbiLity to explain design decisions.</li>
                        </ul>

                        <p><strong>Nice-to-haves</strong></p>

                        <ul>
                            <li>AbiLityto create front-end code (HTML/C5S/jQuery).</li>
                            <li>Experience designing interfaces and interactions for reaL-worLd applications.</li>
                            <li>Mobile app experiences a pLus.</li>
                            <li>Experience with user interface and visual design patterns.</li>
                            <li>Experience working in a structured, coLlaborative team environment (with cross-functionaL roles</li>
                            <li>Like project managers, business associates and deveLopers).</li>
                        </ul>

                        <p><strong>How to apply?</strong></p>

                        <p>PLease send us a Resume and PortfoLios. Pixel-perfect mockups, UX )AraLkthroughs, UI designs, Live product Links and code are aft accepted. Send us via clinavine@career.com</p>

                        <h3>Why You’ll Love Working Here</h3>

                        <ul>
                            <li>Opportunities to work abroad (US, AUS)</li>
                            <li>Compliance tufty to Vietnam Labor code</li>
                            <li>Company trip, team-building events</li>
                            <li>13th salary and project bonus</li>
                            <li>Work-from-home poLicy</li>
                            <li>Support Laptop</li>
                            <li>Extra healthcare package</li>
                        </ul>
                    </div>
                    <div class="review-area pb-60 pb-sm-30 pb-xs-30">
                        <div class="review-container">
                            <h3 class="title">1 Review</h3>
                            <div class="review-content">
                                <div class="review-avatar">
                                    <img src="assets/images/author/author2.jpg" alt="">
                                </div>
                                <div class="review-details">
                                    <div class="review-title">
                                        <h3 class="title">Suspendisse in tortor ex</h3>
                                        <div class="rate-content">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <span class="review-by">By: </span>
                                                <span class="review-name theme-color">Employer Emplyer </span>
                                            </li>
                                            <li>
                                                <i class="lnr lnr-clock"></i>
                                                <span>6 months ago</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review-des">
                                        <p>Etiam ut ligula velit. Donec at blandit metus, sit amet elementum sapien. Nullam fermentum lorem quis mollis sodales. Nullam sodales volutpat tortor, vitae bibendum ex viverra faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-apply">
                        <a class="ht-btn text-center" href="#">Apply now <i class="ml-10 mr-0 fa fa-paper-plane"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Job Details Section End -->
@endsection
