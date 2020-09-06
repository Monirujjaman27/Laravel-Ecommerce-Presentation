@extends('layouts.app')

@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header"> 
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="ti-home"> Dashboard</i> 
                            </a>
                        </li>
                        <li class="breadcrumb-item"><span>Manage Products</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>All Products</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="5">No</th>
                                                    <th width="15">Product Name</th>
                                                    <th width="10">Brand</th>
                                                    <th width="10">Category</th>
                                                    <th width="10">Thumbnail</th>
                                                    <th width="5">Price</th>
                                                    <th width="10">Descount</th>
                                                    <th width="5">Availability</th>
                                                    <th width="5">Status</th>
                                                    <th width="10">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @php($i=1)
                                            @foreach($sowproduct as $sowproduct)
                                                <tr>
                                                    <td width="5"> {{ $i }}</td>
                                                    <td width="15">{{ $sowproduct->productName }}</td><!-- Product Name -->
                                                    <td width="10">{{ $sowproduct->brandId }}</td>
                                                    <td width="10">{{ $sowproduct->categoryId }}</td>
                                                    <td width="10"><img class="img-fluid" height="25px" width='25px' src="{{ asset('assets/web/images/NewProduct/')}}{{'/'.$sowproduct->thumbnail }}" alt="Image"></td>
                                                    <td width="10">{{ $sowproduct->price }}</td>
                                                    <td width="5"> {{ $sowproduct->discount }}</td>
                                                    <td width="10"> 
                                                        @if($sowproduct->availability == 1)
                                                            <span>In Stock</span>
                                                        @else($sowproduct->status == 0)
                                                        <span>Out Of Stock</span>
                                                        @endif
                                                    </td>

                                                    <td width="5">
                                                    @if($sowproduct->status == 1)
                                                        <span><a id="aToInactiveId" class='btn border border-lime' data-id="{{ $sowproduct->id }}" href="{{ route('aToInactive', $sowproduct->id) }}">Active</a></span>
                                                    @else($sowproduct->status == 0)
                                                    <span><a id="inToAtiveId" class='btn border border-lime' data-id="{{ $sowproduct->id }}" href="{{ route('inToAtive', $sowproduct->id) }}">Inactive</a></span>
                                                    @endif
                                                    </td>
                                                    <td>   
                                                        <button id="ajaxEditProduct" class="bg-info" data-target="#edit_product-{{ $sowproduct->id }}" data-id="{{ $sowproduct->id }}" data-toggle="modal"><i class="ti-pencil mx-2"></i></button>
                                                        <!-- <a class="p-1 bg-success" href=""><i class="ti-pencil mx-2"></i></a>     -->
                                                        <button class="bg-danger" data-target="#small-Modal" data-toggle="modal" ><i class="ti-trash"></i></button>    
                                                   
                                                        @include('Admin.Product.includes.delete_product')
                                                        @include('Admin.Product.includes.Edit_product')

                                                    </td>
                                                </tr>
                                                @php ($i++)
                                               @endforeach
                                            </tbody>
                                            
                                        </table>
                                       
                                    </div>
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
