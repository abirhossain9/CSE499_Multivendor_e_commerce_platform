@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update the product information</h4>
        <p class="mg-b-0">Update product information of selected product</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="name" class="form-control" required="required" value="" autocomplete="off" readonly>
                                    </div>
                                     <div class="form-group">
                                         <label>Product Details</label>
                                         <textarea type="text" name="shop_type" class="form-control" required="required" autocomplete="off" rows="4" readonly></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Price</label>
                                        <input type="number" name="address" class="form-control" required="required" value="" autocomplete="off" readonly>
                                    </div>

                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Product Description</label>
                                         <textarea type="text" name="product_description" class="form-control" required="required" autocomplete="off" rows="6" readonly></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label>Product Status</label>
                                        <select class="form-control" name="product_status">
                                            <option value="1">Please Select The Product Status</option>
                                            <option value="1" >Active</option>
                                            <option value="2" >Inactive</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-4">


                                     <div class="form-gorup">
                                        <label>Product Picture</label>
                                          <br>
                                        <h4>No Image uploaded</h4>
                                    <br>
                                    Update Image
                                    <br>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="updateProduct" value="Update Product" class="custom-btn btn btn-teal mg-b-10">
                                    </div>

                                </div>


                            </div>

                        </form>
                    <!-- d-flex -->
                </div>
                <!-- d-flex -->
            </div>
            <!-- card -->

            {{-- page body content end --}}
        </div>
    </div>
</div>
@endsection
