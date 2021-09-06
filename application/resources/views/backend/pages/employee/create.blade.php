@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create New Employee</h4>
        <p class="mg-b-0">Add New Employee</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" class="form-control" required="required" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" required="required" autocomplete="off">
                                    </div>

                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Phone</label>
                                         <input type="text" name="phone" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Working Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                       <label>Overview</label>
                                       <textarea type="text" rows="4" name="overview" class="form-control" required="required" autocomplete="off"></textarea>
                                    </div>
                                     <div class="form-gorup">
                                        <label>Profile Picture</label>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="addMentor" value="Add New Mentor" class="custom-btn btn btn-teal mg-b-10">
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
