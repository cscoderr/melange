@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Edit Profile</h2>
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
                                <div class="card-head">
                                    <h5 class="card-title">Profile Info</h5>
                                </div>
                                <form action="{{ url('profile/edit') }}" method="POST" enctype="multipart/form-data">
                                    @include('layouts.message')
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="full_name" class="form-control" value="{{ $user->full_name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">Email</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">Phone Number</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
                                                </div>
                                            </div>
                                        </div>
                                        @if($user->user_type == 2 )
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="address">Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="logo">Company Logo</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" name="logo" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
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
