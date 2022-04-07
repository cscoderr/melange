@extends('layouts.auth')
@section('content')
<div class="nk-main ">
    <!-- wrap @s -->
    <div class="nk-wrap nk-wrap-nosidebar">
        <!-- content @s -->
        <div class="nk-header nk-header-fluid is-light">
            <div class="container-xl wide-xl">
                <div class="nk-header-wrap">
                    {{-- <div class="nk-menu-trigger d-xl-none ml-n1">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div> --}}
                    <div class="nk-header-brand">
                        <a class="navbar-brand" href="{{ url('/') }}" style="text-align: center !important; font-size: 35px; font-weight: bold; color: black;" >Recruitment Choice</a>
                    </div><!-- .nk-header-brand -->
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav nav nav-sm justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}" style="color: black; font-size: 15px; font-weight: 600;">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about-us') }}" style="color: black; font-size: 15px; font-weight: 600;">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/service') }}" style="color: black; font-size: 15px; font-weight: 600;">WHAT WE DO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/job-search') }}" style="color: black; font-size: 15px; font-weight: 600;">JOB SEARCH</a>
                            </li>
                            <li class="nav-item dropup active current-page">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10" style="color: black; font-size: 15px; font-weight: 600;"><span>CONTACT</span></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                        <li>
                                            <a href="{{ url('/contact-us') }}" class="language-item">Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/our-team') }}s" class="language-item">Join Our Team
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropup active current-page">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10" style="color: black; font-size: 15px; font-weight: 600;"><span>RECRUITMENT</span></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                        <li>
                                            <a href="{{ url('/register-opt') }}" class="language-item">Get Hired
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/employers') }}" class="language-item">For Employers
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .nk-header-wrap -->
            </div><!-- .container-fliud -->
        </div>
        <div class="nk-content">
            
            <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Apply to work</h4>
                                <div class="nk-block-des">
                                    <p>Basic Preliminary Details</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('courier/register') }}" method="POST">
                            @include('layouts.message')
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="name">Sector</label>
                                <select class="form-control form-control-lg" id="delivery_mode" name="sector">
                                    <option value="" selected="selected">-- Please Select --</option>
                                    <option value="cleaning">Cleaning</option>
                                    <option value="construction">Construction</option>
                                    <option value="courier">Courier</option>
                                    <option value="customerservice">Customer Service</option>
                                    <option value="hospitality">Hospitality</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Position</label>
                                <input type="text" class="form-control form-control-lg" id="position" name="position" placeholder="Job reference if applicable" value="{{ old('position') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Employment status</label>
                                <select class="form-control form-control-lg" name="employment_status">
                                    <option value="" selected="selected">-- Please Select --</option>
                                    <option value="unemployed">Unemployed</option>
                                    <option value="self employed">Self-employed</option>
                                    <option value="working full time">Working Full-time</option>
                                    <option value="working part time">Working Part-time</option>
                                    <option value="studying full time">Studying Full-time</option>
                                    <option value="studying part time">Studying Part-time</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Availability</label>
                                <input type="text" class="form-control form-control-lg" id="email" name="availability" placeholder="Enter your availability" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Public liability insurance </label>
                                <select class="form-control form-control-lg" id="work_range" name="liability_status">
                                   <option value="" selected="selected">-- Please Select --</option>
                                   <option value="I have insurance">I have insurance</option>
                                   <option value="I do not have insurance">I do not have insurance</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-label" for="name">Home Address</label>
                                <input type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Enter your home postcode" value="{{ old('address') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Phone Number</label>
                                <input type="text" class="form-control form-control-lg" id="phone_number" name="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                            </div> --}}
                            <div class="form-group">
                                <label class="form-label" for="name">Do you have a smart phone?</label>
                                <select class="form-control form-control-lg" name="smart_phone">
                                   <option value="yes">Yes</option>
                                   <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">First Name</label>
                                <input type="text" class="form-control form-control-lg" name="forename" placeholder="Enter your first name (inc. middlename)" value="{{ old('forename') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Surname</label>
                                <input type="text" class="form-control form-control-lg" name="surname" placeholder="Enter your surname" value="{{ old('surname') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Date of Birth</label>
                                <input type="date" class="form-control form-control-lg" name="dob">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Are you a citizen of the United Kingdom? </label>
                                <select class="form-control form-control-lg" name="uk_citizen">
                                   <option value="" selected="selected">-- Please Select --</option>
                                   <option value="yes">Yes</option>
                                   <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">If no, are you authorized to work in the UK?</label>
                                <select class="form-control form-control-lg" name="uk_authorized">
                                   <option value="yes" selected>Yes</option>
                                   <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">National Insurance Number <span class="text-danger" data-toggle="tooltip" data-placement="top" title="We often have positions open that will need filling immediately, therefore we need to verify your eligibility to work">(*)</span></label>
                                <input type="text" class="form-control form-control-lg" name="insurance_number" placeholder="Enter your national insurance number">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Address</label>
                                <textarea class="form-control form-control-lg" placeholder="Building name/number, street name, post code" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name"> Do you have a valid driver's license?</label>
                                <select class="form-control form-control-lg" name="valid_license">
                                   <option value="yes">Yes</option>
                                   <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name"> Do you have any of the following forms of transportation?</label>
                                <select class="form-select select2-hidden-accessible" multiple="" data-placeholder="Select Multiple options" data-select2-id="9" tabindex="-1" aria-hidden="true">
                                    <option value="1">Car</option>
                                    <option value="2">Bicycle</option>
                                    <option value="3">Van</option>
                                    <option value="4">Motorcycle</option>
                                    <option value="5">Moped</option>
                                    <option value="5">I take public transport</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Passport to upload</label>
                                <p>Before you get started</p>
                                <ul style="list-style-type: disc; margin-left: 30px;">
                                    <li>Your name and address must match your application</li>
                                    <li>Your license must be in date</li>
                                    <li>Turn flash off</li>
                                    <li>Don’t cover any details</li>
                                </ul>
                                <br>
                                <input type="file" name="passport">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Drivers license to upload</label>
                                <p>Before you get started</p>
                                <ul style="list-style-type: disc; margin-left: 30px;">
                                    <li>Your name and address must match your application</li>
                                    <li>Your license must be in date</li>
                                    <li>Turn flash off</li>
                                    <li>Don’t cover any details</li>
                                </ul>
                                <input type="file" name="driver_license">
                            </div>
                            <div class="form-group" id="uploadCv" style="display: block">
                                <label class="form-label" for="name">Upload your CV</label>
                                <input type="file" name="cv" class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="hasCv" value="false" id="hasCv"/>
                                <label class="form-label" for="name">I had already sent my CV</label>
                            </div>
                            <div class="form-group" >
                                <input type="checkbox" name="cover_later" id="coverLetter"/>
                                <label class="form-label" for="name">I wish to provide a cover letter.</label>
                            </div>
                            <div class="form-group" id="coverLetterBox" style="display: none;">
                                <label class="form-label" for="name">Cover Letter</label>
                                <textarea placeholder="Pls note that we may be in contact for further employment history" class="form-control form-control-lg" name=""></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Best contact time</label>
                                <select type="text" class="form-control form-control-lg" id="name" name="contact_time">
                                    <option value="" selected="selected">-- Please Select --</option>
                                    <option value="8am-11am">8am-11pm</option>
                                    <option value="12pm-3pm">12pm-3pm</option>
                                    <option value="4pm-7pm">4pm-7pm</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Mobile Number</label>
                                <input type="text" class="form-control form-control-lg" name="mobile_number" placeholder="Enter your mobile number" value="{{ old('mobile_number') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Email Address</label>
                                <input type="text" class="form-control form-control-lg" name="email_address" placeholder="Enter your email address" value="{{ old('email_address') }}">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-control-xs custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox" name="checkbox">
                                    <label class="custom-control-label" for="checkbox">I have read and understand how my data will be stored and processed as outlined in the Privacy Policy</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Submit Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- wrap @e -->
    </div>
    <!-- content @e -->
</div>
@endsection
