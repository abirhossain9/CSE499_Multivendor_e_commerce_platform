@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create New Branch</h4>
        <p class="mg-b-0">Add New branches of this company</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">

                        <form action="{{route('branch.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Branch Name</label>
                                        <input type="text" name="name" class="form-control" required="required" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input type="text" name="address1" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Branch Name (Bangla)</label>
                                         <input type="text" name="bangla_name" class="form-control" required="required" autocomplete="off">
                                       </div>

                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input type="text" name="address2" class="form-control" required="required" autocomplete="off">
                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" required="required" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                        <label>Phone No. [use comma to set multiple phone no.]</label>
                                        <input type="text" name="phone" class="form-control" required="required" autocomplete="off">
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="addBranch" value="Add New Branch" class="btn btn-teal btn-block mg-b-10">
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
