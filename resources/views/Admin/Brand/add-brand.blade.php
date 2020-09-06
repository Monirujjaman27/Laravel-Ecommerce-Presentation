@extends('layouts.app')

@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add Brand</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="ti-home"> Dashboard</i> 
                            </a>
                        </li>
                        <li class="breadcrumb-item"><span>Add Brand</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-10 m-auto animated slideInUp">
                            @include('Admin.Includes.message')
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Brand</h5>
                                    <a href="{{ route('manage-brand') }}" class="btn btn-info float-right"><i class="ti-arrow-left"></i>All Brands</a>
                                </div>
                                <div class="card-block">
                                    <form method="POST" action="{{ route('save-brand') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">New Brand Name</label>
                                            <div class="col-sm-9">
                                                <input name="brandName" type="text" class="form-control form-control-normal" placeholder="Brand Name"  value="{{ old('brandName') }}">
                                            </div>
                                        </div>
                                            <input type="submit" value="Save" class="float-right btn btn-success" name="bndSubmit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>
@endsection
