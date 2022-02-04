@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update the order information</h4>
        <p class="mg-b-0">Update order information of selected order</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('order.update',$order->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" class="form-control" required="required" value="{{$order->product->product_name}}" autocomplete="off" readonly>
                                    </div>
                                     <div class="form-group">
                                        <label>Shop Name</label>
                                        <input type="text" name="shop_name" class="form-control" required="required" value="{{$order->shop->shop_name}}" autocomplete="off" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Buyer Name</label>
                                        <input type="text" name="name" class="form-control" required="required" value="{{$order->name}}" autocomplete="off" readonly>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="form-group">
                                         <label>Quantity</label>
                                         <input type="text" name="product_quantity" class="form-control" required="required" autocomplete="off" value="{{$order->product_quantity}}" readonly>
                                    </div>

                                     <div class="form-group">
                                         <label>Price</label>
                                         <input type="text" name="product_final_price" class="form-control" required="required" autocomplete="off" value="{{$order->product_final_price}}" readonly>
                                    </div>

                                    <div class="form-group">
                                         <label>Order Created</label>
                                         <input type="text" name="created_at" class="form-control" required="required" autocomplete="off" value="{{$order->created_at}}" readonly>
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="form-group">
                                         <label>Delivery Address</label>
                                         <input type="text" name="shipping_address" class="form-control" required="required" autocomplete="off" value="{{$order->shipping_address}}" readonly>
                                    </div>

                                    <div class="form-group">
                                         <label>Shop Address</label>
                                         <input type="text" name="shop_address" class="form-control" required="required" autocomplete="off" value="{{$order->shop->shop_address}}" readonly>
                                    </div>

                                </div>

                                <div class="col-lg-3">

                                    <div class="form-group">
                                        <label>Rider Status</label>
                                        <select class="form-control" name="received_by_rider">
                                            <option value="0">Please Select The Shop Status</option>
                                            <option value="0" @if($order->received_by_rider == 0) selected @endif>send rider to shop</option>
                                            <option value="1" @if($order->received_by_rider == 1) selected @endif>received product from shop</option>
                                            <option value="2" @if($order->received_by_rider == 2) selected @endif>product received</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Payment Status</label>
                                        <select class="form-control" name="is_paid">
                                            <option value="0">Please Select The Shop Status</option>
                                            <option value="0" @if($order->is_paid == 0) selected @endif>payment incomplete</option>
                                            <option value="1" @if($order->is_paid == 1) selected @endif>payment complete</option>
                                            <option value="2" @if($order->is_paid == 2) selected @endif>payment received by shop owner</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Completion Status</label>
                                        <select class="form-control" name="is_complete">
                                            <option value="0">Please Select The Shop Status</option>
                                            <option value="0" @if($order->is_complete == 0) selected @endif>order processing</option>
                                            <option value="1" @if($order->is_complete == 1) selected @endif>order shipped</option>
                                            <option value="2" @if($order->is_complete == 2) selected @endif>order complete</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <label></label>
                                    <div class="form-group">
                                        <input type="submit" name="updateShop" value="Update Order" class="custom-btn btn-block btn btn-teal mg-b-10">
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
