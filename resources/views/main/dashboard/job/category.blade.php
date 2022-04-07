@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                            <h2 class="nk-block-title fw-normal">Add Job Category</h2>
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Enter job category Info</h5>
                                </div>
                                <form action="{{ url('job/category/add') }}" method="POST">
                                    @include('layouts.message')
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="category_name">Industry</label>
                                                <div class="form-control-wrap">
                                                    <select type="text" name="industry" class="form-control">
                                                        <option value="">--Select--</option>
                                                        @foreach ($industries as $industry)
                                                            <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6"></div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="category_name">Category Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" name="category_name" class="form-control" value="{{ old('category_name') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Add Category</button>
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
