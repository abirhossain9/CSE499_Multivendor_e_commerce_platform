@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create New Coupon</h4>
        <p class="mg-b-0">Add New Coupon From Here</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('coupon.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Coupon Code</label>
                                        <input type="text" name="code" class="form-control" required="required" placeholder="Enter The Coupon Code" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label>Fixed Value[BDT/TK]</label>
                                        <input type="number" name="fixed_value" class="form-control" placeholder="Enter The Amount Only" autocomplete="off">
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                   <div class="form-group">
                                        <label>Discount Type</label>
                                        <select class="form-control" name="discount_type">
                                            <option value="1">Please Select The Discount Type</option>
                                            <option value="1">Fixed Amount</option>
                                            <option value="2">Percent Off</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Percentage Off[%]</label>
                                        <input type="number" name="percent_value" class="form-control"
                                        placeholder="Enter The Percentage Number Only" autocomplete="off">
                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="addCoupon" value="Add New Coupon Code" class="custom-btn btn btn-teal mg-b-10">
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
