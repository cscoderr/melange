@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Saved Jobs</h2>
                            {{-- <div class="nk-block-des">
                                <p class="lead"><strong>DashLite</strong> includes all the necessary components and elements with utility classes that helps you to create your web apps or application faster.</p>
                            </div> --}}
                        </div>
                    </div><!-- .nk-block-head -->
                    @include('layouts.message')
                    <div class="nk-block nk-block-lg">
                        <div class="row g-gs">
                            @foreach ($jobs as $job)
                                <div class="col-lg-6">
                                    <a href="{{ url('job/details/' . $job->job->hid) }}" class="card card-bordered text-soft">
                                        <div class="card-inner">
                                            <div class="align-center justify-between">
                                                <div class="g">
                                                    <h6 class="title">{{ $job->job->job_title }}</h6>
                                                    <p>{{ $job->job->job_type->name }} -> {{ $job->job->work_type->name }}</p>
                                                    <b>{{ explode(' ', $job->job->created_at)[0] }}</b>
                                                </div>
                                                <div class="g">
                                                    <span class="btn btn-icon btn-trigger mr-n1"><em class="icon ni ni-chevron-right"></em></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- .col -->
                            @endforeach
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@endsection
