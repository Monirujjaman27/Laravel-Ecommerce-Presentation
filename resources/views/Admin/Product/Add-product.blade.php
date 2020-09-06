@extends('layouts.app')

@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Add Product</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="ti-home"> Dashboard</i> 
                            </a>
                        </li>
                        <li class="breadcrumb-item"><span>Add Product</span></li>
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
                        <div class="col-12 m-auto animated slideInUp">
                            @include('Admin.Includes.message')
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Product</h5>
                                    <a href="{{ route('manage_product') }}" class="float-right text-info">All Products</a>
                                </div>
                                <div class="card-block">
                                    <form method="POST" action="{{ route('save_product') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-md-8">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Title:</label>
                                            <div class="col-sm-9">
                                                <input name="productName" type="text" class="form-control form-control-normal border" placeholder="product Name"  value="{{ old('productName') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Brand:</label>
                                            <div class="col-sm-9">
                                                <select name="brand" id="" class="form-control form-control-normal border">
                                                    <option value="">Select</option>
                                                    @foreach($brandRow as $brandRow)
                                                    <option value="{{ $brandRow->id }}">{{ $brandRow->BrandName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category:</label>
                                            <div class="col-sm-9">
                                                <select name="category" id="" class="form-control form-control-normal border">
                                                    <option value="">Select</option>
                                                    @foreach($categoryRow as $categoryRow)
                                                    <option value="{{ $categoryRow->id }}">{{ $categoryRow->categoryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Description:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control form-control-normal border" name="description" id="" cols="50" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Price:</label>
                                            <div class="col-sm-9">
                                                <input name="price" type="number" class="form-control form-control-normal border" placeholder="Price"  value="{{ old('price') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Discount:</label>
                                            <div class="col-sm-9">
                                                <input name="discount" type="number" class="form-control form-control-normal border" placeholder="Discount"  value="{{ old('discount') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Availability:</label>
                                            <div class="col-sm-9">
                                                <select name="availability" id="" class="form-control form-control-normal border">
                                                    <option value="1">In Stock</option>
                                                    <option value="2">Out of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Thumbnail:</label>
                                            <div class="col-sm-9">
                                                <input name="proThumbnail" type="file">
                                            </div>
                                        </div>
                                          <input type="submit" value="Save" class="float-right btn btn-success" name="bndSubmit">
                                        </div> <!-- row-->
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
