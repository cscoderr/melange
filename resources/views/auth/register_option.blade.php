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
                <h4 class="nk-block-title">Select an option below to begin.</h4>
                <div class="nk-block-des" style="margin-bottom: 15px;">
                    <p>To apply to work through Recruitment Choice, you must complete and submit the application form (approx completion time . 3minutes).</p>
                    <span>Please be ready to prove:</span>
                    <ul style="list-style-type: disc !important; margin-left: 30px;">
                        <li>Information about yourself</li>
                        <li>Prove of your right to work in the UK</li>
                        <li>Prove of your identification</li>
                        <li>Your CV or Cover letter</li>
                    </ul>
                </div>
                 <form method="POST" action="{{url('/register/option')}}" id="optionForm">
                @csrf
                <input type="hidden" value="4" name="reg_option">
                @if(1 == 2)
                <div class="card card-bordered" id="answerBox" style="margin-bottom: 25px;">
                            <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" value="1" name="reg_option" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">I'd like a customer account</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" value="2" name="reg_option" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3">I'd like a personal account</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" value="3" name="reg_option" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">I'd like to get a quote or to make a one-off same day booking using card payment</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" value="4" name="reg_option" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5">I'm a courier wanting to work</label>
                                        </div>
                                    </li>
                            </ul>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Apply</button>
                        </form> 
            </div>
        </div>
        <!-- wrap @e -->
    </div>
    <!-- content @e -->
</div>
@endsection
