@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update the user information</h4>
        <p class="mg-b-0">Update user information Of selected user</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required="required" value="{{$user->name}}" autocomplete="off">
                                    </div>
                                     <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required="required" value="{{$user->email}}" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" required="required" value="{{$user->address}}" autocomplete="off">
                                    </div>

                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Phone</label>
                                         <input type="text" name="phone" class="form-control" required="required" autocomplete="off" value="{{$user->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="status">
                                            <option value="3">Please Select The Role</option>
                                            <option value="1" @if($user->role == 1) selected @endif>Admin</option>
                                            <option value="2" @if($user->role == 2) selected @endif>Vendor</option>
                                            <option value="3" @if($user->role == 3) selected @endif>Customer</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1" @if($user->status == 1) selected @endif>Active</option>
                                            <option value="2" @if($user->status == 2) selected @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                     <div class="form-gorup">
                                        <label>Profile Picture</label>
                                          <br>
                                        @if ($user->image==NULL)
                                        <h4>No Image uploaded</h4>
                                        @else
                                          <img src="{{asset('frontend/images/user/'.$user->image)}}" alt="" width="40">
                                        @endif
                                    <br>
                                    Update Image
                                    <br>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="updateUser" value="Update User" class="custom-btn btn btn-teal mg-b-10">
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
