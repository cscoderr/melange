@extends('layouts.auth')
@section('content')
<div class="nk-main ">
    <!-- wrap @s -->
    <div class="nk-wrap nk-wrap-nosidebar">
        <!-- content @s -->
        <div class="nk-content ">
            <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                <div class="brand-logo pb-4 text-center">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png') }} 2x" alt="logo">
                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/logo-dark.png') }}" srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Apply to work as a courier</h4>
                                <div class="nk-block-des">
                                    <p>Basic Preliminary Details</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('company/register') }}" method="POST">
                            @include('layouts.message')
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="name">Company Name</label>
                                <input type="text" class="form-control form-control-lg" name="company_name" value="{{ old('company_name') }}" id="name" placeholder="Enter company name">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Company Email Address</label>
                                <input type="text" class="form-control form-control-lg" name="email" id="email" value="{{ old('email') }}" placeholder="Enter company email address">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Company Phone Number</label>
                                <input type="text" class="form-control form-control-lg" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" placeholder="Enter company phone number">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <div class="form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter password">
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="custom-control custom-control-xs custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox" name="privacy">
                                    <label class="custom-control-label" for="checkbox">I agree to Rookeys <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block">Register</button>
                            </div>
                        </form>
                        <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wrap @e -->
    </div>
    <!-- content @e -->
</div>
@endsection
