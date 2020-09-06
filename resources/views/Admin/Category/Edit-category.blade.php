@extends('layouts.app')

@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Edit Category</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="ti-home"> Dashboard</i> 
                            </a>
                        </li>
                        <li class="breadcrumb-item"><span>Edit Category</span></li>
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
                   
                        <div class="col-8 animated slideInUp m-auto">
                        @include('Admin.Includes.message')
                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit Category</h5>
                                    <a href="" class="btn btn-info float-right"><i class="ti-arrow-left"></i>All Category</a>
                                   
                                </div>
                                <div class="card-block">
                                    <form method="POST" action="">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">New Category Name</label>
                                            <div class="col-sm-9">
                                                <input name="categoryName" type="text" class="form-control form-control-normal" value="{{ $row->categoryName }}">
                                            </div>
                                        </div>
                                            <input type="submit" value="Save Category" class="float-right btn btn-primary" name="bndSubmit">
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