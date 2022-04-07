@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Change Password</h2>
                            @if(1==2)
                            <div class="nk-block-des">
                                <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                            </div>
                            @endif
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        @if(1==2)
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Basic Form Style - S2</h4>
                                <div class="nk-block-des">
                                    <p>You can alow display form in column as example below.</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="{{ url('job/post') }}" method="POST">
                                    @include('layouts.message')
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">Old Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="job_title" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">New Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="job_title" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">New Password Again</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="job_title" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6"></div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Change Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@endsection
