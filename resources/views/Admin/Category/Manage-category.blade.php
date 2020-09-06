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
                        <div class="col-sm-12">
                            @include('Admin.Includes.message')
                            <div class="card">
                                <div class="card-header">
                                    <h5>All Category</h5>
                                    <span class="btn btn-info float-right" onclick="create()">Add Category</span>
                                </div>
                                <div class="message mx-2"></div>
                                <div class="card-block">
                                    <div id="catTable" class="dt-responsive table-responsive">
                                        <table id="table-style-hover"
                                            class="table table-striped table-hover table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="5">No</th>
                                                    <th width="15">Category Name</th>
                                                    <th width="10">Slug</th>
                                                    <th width="10">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="catTbody">

                                            </tbody>

                                        </table>
                                        <!-- table end  -->

                                        <!-- edite modal box  -->
                                        <div class="modal fade" id="modalform" tabindex="-1"
                                            aria-labelledby="exampleModalCenterTitle" style="display: none;"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content card">
                                                    <div class="modal-header">

                                                        <div class="card-header w-100 float-left">
                                                            <button type="button" class="close float-right"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                Edit Category</h5>
                                                        </div>

                                                    </div>
                                                    <div class="card-block">
                                                        <form id="editeCategoryForm" method="POST">
                                                            @csrf
                                                            <input class="catInputFildId" type="hidden" name="id">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">
                                                                    <strong> Category Name :</strong></label>
                                                                <div class="col-sm-8">
                                                                    <input name="categoryName"
                                                                        type="text"
                                                                        class="form-control form-control-normal catInputFild"
                                                                        value="">
                                                                </div>
                                                            </div>


                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>

                                                                <button onclick="save()" type="button"
                                                                    class="float-right btn btn-primary btnsave">Save</button>
                                                                <button onclick="update()" type="button"
                                                                    class="float-right btn btn-primary btnupdate">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




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