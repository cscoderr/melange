@extends('layouts.app')

@section('content')
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to DashLite Dashboard Template.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                                        
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                @if(session()->get('user')['user_type_id'] == 1)
                                    <div class="nk-block">
                                        <div class="row g-gs">
                                            <div class="col-xxl-6">
                                                <div class="row g-gs">
                                                <div class="col-lg-6 col-xxl-12">
                                                        <div class="row g-gs">
                                                            <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                                <div class="card card-bordered">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group align-start mb-2">
                                                                            <div class="card-title">
                                                                                <h6 class="title">Registered User</h6>
                                                                            </div>
                                                                            <div class="card-tools">
                                                                                <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total active subscription"></em>
                                                                            </div>
                                                                        </div>
                                                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                            <div class="nk-sale-data">
                                                                                <span class="amount">{{ $users }}</span>
                                                                            </div>
                                                                            <div class="nk-sales-ck">
                                                                                <canvas class="sales-bar-chart" id="activeSubscription"></canvas>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                                <div class="card card-bordered">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group align-start mb-2">
                                                                            <div class="card-title">
                                                                                <h6 class="title">Registered Courier</h6>
                                                                            </div>
                                                                            <div class="card-tools">
                                                                                <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Daily Avg. subscription"></em>
                                                                            </div>
                                                                        </div>
                                                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                            <div class="nk-sale-data">
                                                                                <span class="amount">{{ $couriers }}</span>
                                                                            </div>
                                                                            <div class="nk-sales-ck">
                                                                                <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6 col-xxl-12">
                                                        <div class="row g-gs">
                                                            <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                                <div class="card card-bordered">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group align-start mb-2">
                                                                            <div class="card-title">
                                                                                <h6 class="title">Available Jobs</h6>
                                                                            </div>
                                                                            <div class="card-tools">
                                                                                <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total active subscription"></em>
                                                                            </div>
                                                                        </div>
                                                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                            <div class="nk-sale-data">
                                                                                <span class="amount">{{ $job }}</span>
                                                                            </div>
                                                                            <div class="nk-sales-ck">
                                                                                <canvas class="sales-bar-chart" id="activeSubscription"></canvas>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-sm-6 col-lg-12 col-xxl-6">
                                                                <div class="card card-bordered">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group align-start mb-2">
                                                                            <div class="card-title">
                                                                                <h6 class="title">Verified Courier</h6>
                                                                            </div>
                                                                            <div class="card-tools">
                                                                                <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Daily Avg. subscription"></em>
                                                                            </div>
                                                                        </div>
                                                                        <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                            <div class="nk-sale-data">
                                                                                <span class="amount">{{ $verified }}</span>
                                                                            </div>
                                                                            <div class="nk-sales-ck">
                                                                                <canvas class="sales-bar-chart" id="totalSubscription"></canvas>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div>
                                        </div><!-- .row -->
                                    </div><!-- .nk-block -->
                                @else
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                            <div class="col-lg-6 col-xxl-12">
                                                    <div class="row g-gs">
                                                        <div class="col-sm-12 col-lg-12 col-xxl-12">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Number of Job</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total active subscription"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span class="amount">{{ $postedJob }}</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart" id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                       
                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                                
                                            </div><!-- .row -->
                                        </div>
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
@endsection