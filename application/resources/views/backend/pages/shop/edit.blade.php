@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update the Shop information</h4>
        <p class="mg-b-0">Update shop information of selected shop</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('shop.update.admin',$shop->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Shop Name</label>
                                        <input type="text" name="name" class="form-control" required="required" value="{{$shop->shop_name}}" autocomplete="off" readonly>
                                    </div>
                                     <div class="form-group">
                                        <label>Shop Owner</label>
                                        <input type="text" name="shop_owner" class="form-control" required="required" value="{{$shop->shop_owner}}" autocomplete="off" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Shop Address</label>
                                        <input type="text" name="address" class="form-control" required="required" value="{{$shop->shop_address}}" autocomplete="off" readonly>
                                    </div>

                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Shop Phone No</label>
                                         <input type="text" name="phone" class="form-control" required="required" autocomplete="off" value="{{$shop->shop_phone}}" readonly>
                                    </div>

                                     <div class="form-group">
                                         <label>Shop Type</label>
                                         <input type="text" name="shop_type" class="form-control" required="required" autocomplete="off" value="{{$shop->shop_type}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Shop Status</label>
                                        <select class="form-control" name="shop_status">
                                            <option value="1">Please Select The Shop Status</option>
                                            <option value="1" @if($shop->shop_status == 1) selected @endif>Active</option>
                                            <option value="2" @if($shop->shop_status == 2) selected @endif>Inactive</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Shop Description</label>
                                         <textarea type="text" name="shop_type" class="form-control" required="required" autocomplete="off" rows="4" readonly>{{$shop->shop_description}}</textarea>
                                    </div>


                                     <div class="form-gorup">
                                        <label>Profile Picture</label>
                                          <br>
                                        @if ($shop->image==NULL)
                                        <h4>No Image uploaded</h4>
                                        @else
                                          <img src="{{asset('frontend/images/shops/'.$shop->image)}}" alt="" width="40">
                                        @endif
                                    <br>
                                    Update Image
                                    <br>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="updateShop" value="Update Shop" class="custom-btn btn btn-teal mg-b-10">
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
