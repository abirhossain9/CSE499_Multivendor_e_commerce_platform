@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update The Coupon Information</h4>
        <p class="mg-b-0">Update Coupon Information From Here</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">

                        <form action="{{route('coupon.update',$coupon->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Coupon Code</label>
                                        <input type="text" name="code" class="form-control" required="required" value="{{$coupon->code}}" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label>Fixed Value[BDT/TK]</label>
                                        <input type="number" name="fixed_value" class="form-control" value="{{$coupon->fixed_value}}" autocomplete="off">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                   <div class="form-group">
                                        <label>Discount Type</label>
                                        <select class="form-control" name="discount_type">
                                            <option value="1">Please Select The Discount Type</option>
                                            <option value="1"@if ($coupon->discount_type == 1)
                                                selected
                                            @endif>Fixed Amount</option>
                                            <option value="2"@if ($coupon->discount_type == 2)
                                                selected
                                            @endif>Percent Off</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Percentage Off[%]</label>
                                        <input type="number" name="percent_value" class="form-control"
                                        value="{{$coupon->percent_value}}" autocomplete="off">
                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1"@if ($coupon->status == 1)
                                                selected
                                            @endif>Active</option>
                                            <option value="2"@if ($coupon->status == 2)
                                                selected
                                            @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="updateCoupon" value="Update Coupon Code" class="custom-btn btn btn-teal mg-b-10">
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
