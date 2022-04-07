@extends('layouts.app')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <h2 class="nk-block-title fw-normal">Courier</h2>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Verified Courier</h4>
                                            </div>
                                        </div>
                                        @include('layouts.message')
                                       <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nowrap table">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Full Name</th>
                                                            <th>Email</th>
                                                            <th>Home Address</th>
                                                            <th>Phone Number</th>
                                                            <th>Vehicle</th>
                                                            <th>Work Place</th>
                                                            <th>Time</th>
                                                            <th>Date</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $k = 1;?> 
                                                        @foreach($couriers as $courier)
                                                        <tr>
                                                            <td>{{ $k++ }}</td>
                                                            <td>{{ ucwords($courier->full_name) }}</td>
                                                            <td>{{ $courier->email }}</td>
                                                            <td>{{ $courier->address }}</td>
                                                            <td>{{ $courier->phone_number }}</td>
                                                            <td>{{ $courier->delivery_mode->modes }}</td>
                                                            <td>{{ $courier->delivery_range->area }}</td>
                                                            <td>{{ $courier->work_time->time }}</td>
                                                            <td>{{ $courier->created_at }}</td>
                                                            <td><a href="{{ url('courier/verify/' . $courier->id ) }}" class="btn btn-primary">Verify</a></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                    
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection