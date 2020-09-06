

<div class="modal fade" id="edit_product-{{ $sowproduct->id }}" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Edite Product</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                </button>
                
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body pb-0">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h5>Update Product</h5>
                            <a href="{{ route('manage_product') }}" class="float-right text-info">All Products</a>
                        </div>
                        <div class="card-block">
                            
                                <div class="row">
                                    <div class="col-sm-8">
                                    <!-- Product Title -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Title:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="productTitle"  class="form-control form-control-normal border" placeholder="Title"  value="{{ old('productTitle') }}{{ $sowproduct->productName }}">
                                            </div>
                                        </div>
                                        <!-- Brand -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Brand:</label>
                                            <div class="col-sm-9">
                                                <select name="brand" id="" class="form-control form-control-normal border">
                                                    <option value="">Select</option>
                                                    @foreach($brand as $brand)
                                                    <option <?php if($brand->id == $sowproduct->brandId){echo 'selected' ;}?> value="{{ $brand->id }}">{{ $brand->BrandName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Category -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category:</label>
                                            <div class="col-sm-9">
                                                <select name="brand" id="" class="form-control form-control-normal border">
                                                    <option value="">Select</option>
                                                    @foreach($category as $category)
                                                    <option <?php if($category->id == $sowproduct->categoryId){echo 'selected' ;}?> value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Product Description -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Product Description:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control form-control-normal border" name="description" id="" cols="50" rows="5" placeholder="Description">
                                                {{ old('description') }}
                                                {{ $sowproduct->description }}
                                                
                                                </textarea>
                                            </div>
                                        </div>
                                        <!-- Price -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Price:</label>
                                            <div class="col-sm-9">
                                                <input name="price" type="number" class="form-control form-control-normal border" placeholder="{{ $sowproduct->price }}"  value="{{ old('price') }} ">
                                            </div>
                                        </div>
                                        <!-- Discount -->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Discount:</label>
                                            <div class="col-sm-9">
                                                <input name="discount" type="number" class="form-control form-control-normal border" placeholder=" {{ $sowproduct->discount }}"  value="{{ old('discount') }} {{ $sowproduct->discount }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Availability:</label>
                                            <div class="col-sm-9">
                                                <select name="availability" id="" class="form-control form-control-normal border">
                                                    <option value="">Select</option>
                                                    <option <?php if($sowproduct->availability == 1){ echo 'selected';}?>  value="1">In Stock</option>
                                                
                                                    <option <?php if($sowproduct->availability == 0){ echo 'selected';}?>   value="2">Out of Stock</option>
                                                    

                                                </select>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Thumbnail:</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="thumbanail_img">
                                            </div>
                                            <div class="col-sm-3">
                                                <img class="img-fluid" height="50px" width='50px' src="{{ asset('assets/web/images/NewProduct/')}}{{'/'.$sowproduct->thumbnail }}" alt="Image">
                                            </div>
                                        </div>
                                    
                                    </div> <!-- col -->
                                    <div class="col-md-4">
                                        <div class="form-group card p-2">
                                        <div class="row">

                                            <div class="col-sm-4">
                                                <img class="img-fluid" src="{{ asset('/')}}/78260.jpg" alt="Image">
                                            </div>
                                            <div class="col-sm-4">
                                                <img class="img-fluid" src="{{ asset('/')}}/78260.jpg" alt="Image">
                                            </div>
                                            <div class="col-sm-4">
                                                <img class="img-fluid" src="{{ asset('/')}}/78260.jpg" alt="Image">
                                            </div>

                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-sm-12">
                                                <span class="mb-2"> Featured Image</span>  <br> <br>
                                                <input name="productName" type="File"> <br>
                                                <input name="productName" type="File"><br>
                                                <input name="productName" type="File">
                                            </div>
                                        </div>    
                                        </div> 
                                    </div>
                                </div> <!-- row-->
                        
                        </div>
                    </div>
                </div><!-- modal-body -->

                <div class="modal-footer">
                    <button type="button" class="float-left btn btn-default waves-effect mb-3" data-dismiss="modal">Cancle</button>

                    <input type="submit" value="Update" class="float-right btn btn-success mb-3" name="bndSubmit">
                </div><!-- modal-footer -->
            </form>
        </div>
    </div>
</div>
