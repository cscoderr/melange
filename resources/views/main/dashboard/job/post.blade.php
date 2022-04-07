@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Post Job</h2>
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Job Info</h5>
                                </div>
                                <form action="{{ url('job/post') }}" method="POST">
                                    @include('layouts.message')
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">Job Title</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="job_title" class="form-control" id="full-name-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label" for="job_description">Job Description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control no-resize" name="job_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_location">Location</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="location" class="form-control" id="full-name-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="job_title">Application Deadline Date</label>
                                                <div class="form-control-wrap">
                                                    <input type="date" name="deadline" class="form-control" id="full-name-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Language</label>
                                                <select type="text" class="form-control form-control-lg" id="name" name="language">
                                                    <option value="" selected="selected">-- Please Select --</option>
                                                    <option value="english">English</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Hour</label>
                                                <select type="text" class="form-control form-control-lg" id="name" name="hour">
                                                    <option value="" selected="selected">-- Please Select --</option>
                                                    <option value="full time">Full Time</option>
                                                    <option value="part time">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="salary_range">Salary Range</label>
                                                <div class="input-prepend-group">
                                                    <div>$</div>
                                                </div>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="salary_range" class="form-control" id="full-name-1" placeholder="200-400">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Contract Type</label>
                                                <select type="text" class="form-control form-control-lg" id="name" name="contract_type">
                                                    <option value="" selected="selected">-- Please Select --</option>
                                                    <option value="self employed">Self Employed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Recruiter Type</label>
                                                <select type="text" class="form-control form-control-lg" id="name" name="recruiter_type">
                                                    <option value="" selected="selected">-- Please Select --</option>
                                                    <option value="direct employer">Direct Employer</option>
                                                    <option value="company">Company</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Post Job</button>
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
