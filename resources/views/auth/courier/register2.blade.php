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
                                <h4 class="nk-block-title">Apply to work as a courier</h4>
                                <div class="nk-block-des">
                                    <p>Basic Preliminary Details</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('courier/register') }}" method="POST">
                            @include('layouts.message')
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="name">What vehicle do you intend to use for the work?</label>
                                <select class="form-control form-control-lg" id="delivery_mode" name="delivery_mode">
                                    <option value="" selected="selected">-- Please Select --</option>
                                    @foreach($modes as $mode)
                                        <option value="{{ $mode->id }}">{{ $mode->modes }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Full Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="full_name" placeholder="Enter your full name" value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Home Address</label>
                                <input type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Enter your home postcode" value="{{ old('address') }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Phone Number</label>
                                <input type="text" class="form-control form-control-lg" id="phone_number" name="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                            </div>
                             <div class="form-group">
                                <label class="form-label" for="name">Where do you want to work?</label>
                                <select class="form-control form-control-lg" id="work_range" name="work_range">
                                   <option value="" selected="selected">-- Please Select --</option>
                                   @foreach($ranges as $range)
                                   <option value="{{ $range->id }}">{{ $range->area }}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Best time to contact (not guaranteed, used as guidance)</label>
                                <select type="text" class="form-control form-control-lg" id="name" name="time" placeholder="Enter your full name" value="{{ old('full_name') }}">
                                    <option value="" selected="selected">-- Please Select --</option>
                                    @foreach($times as $time)
                                    <option value="{{ $time->id }}">{{ $time->time }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-control-xs custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox" name="checkbox">
                                    <label class="custom-control-label" for="checkbox">I understand the required self-employment status</label>
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