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
                        <li class="breadcrumb-item"><span>Manage Brand</span></li>
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
                        <div class="col-sm-12 animated slideInUp">
                        @include('Admin.Includes.message')
                            <div class="card">
                                <div class="card-header">
                                    <h5>All Brands</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="5">No</th>
                                                    <th width="15">Brand Name</th>
                                                    <th width="10">Slug</th>
                                                    <th width="10">Status</th>
                                                    <th width="10">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php( $i=1)
                                               
                                                @foreach($sowBrand as $sowBrand)
                                                <tr>
                                                    <td width="5">{{ $i }}</td>
                                                    <td width="15">{{ $sowBrand->BrandName}}</td><!-- Product Name -->
                                                    <td width="10">{{$sowBrand->BrandSlug}}</td>
                                                    <td width="10">
                                                      @if ($sowBrand->Status == 0)
                                                       
                                                        <form action="update_status" method="POST">
                                                        <span class="mr-5"> Active</span>
                                                            @csrf
                                                                <input type="text" hidden value="1">
                                                                <input type="button" value="Make inactive">
                                                        </form>
                                                        @else
                                                        <form action="update_status" method="POST">
                                                        <span class="mr-5"> Inactive</span>
                                                            @csrf
                                                                <input type="text" hidden value="0">
                                                                <input type="button" value="Make Active">
                                                        </form>
                                                        @endif </td>
                                                    <td>
                                                        <span><a href="{{ route('edit_brand', $sowBrand->id) }}"><i class="ti-pencil mx-2"></i></a></span>
                                                        <span><a onclick="return confirm('Are You Sure To Delete')" href="{{ route('delete_brand', $sowBrand->id) }}"><i class="ti-trash"></i></a></span>
                                                    </td>
                                                </tr>
                                                
                                                @php($i++)
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
