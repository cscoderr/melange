@extends('layouts.auth')
@section('content')
<div class="nk-main ">
    <!-- wrap @s -->
    <div class="nk-wrap nk-wrap-nosidebar">
        <!-- content @s -->
        <div class="nk-content ">
            <div class="nk-block nk-block-middle nk-auth-body wide-xs">
               <!--  <div class="brand-logo pb-4 text-center">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png') }} 2x" alt="logo">
                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/logo-dark.png') }}" srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="logo-dark">
                    </a>
                </div> -->
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Open your account with us in minutes and start posting job</h4>
                                <div class="nk-block-des">
                                    <p>Enter your Details</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('register') }}" method="POST">
                            @include('layouts.message')
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="name">Full Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="full_name" placeholder="Enter your full name" value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Phone Number</label>
                                <input type="phone" class="form-control form-control-lg" id="phone_number" name="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Address</label>
                                <input type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Enter your address" value="{{ old('address') }}">
                            </div>
                             <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <div class="form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Re-Type Password</label>
                                <div class="form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input type="password" class="form-control form-control-lg" id="password" name="password_confirmation" placeholder="Enter your password again">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-control-xs custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox" name="checkbox">
                                    <label class="custom-control-label" for="checkbox">I have read and agree to the terms and the privacy policy</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
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
