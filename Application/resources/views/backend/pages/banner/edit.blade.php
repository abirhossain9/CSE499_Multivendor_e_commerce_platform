@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update Banner</h4>
        <p class="mg-b-0">Update Banner from here</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Banner Text</label>
                                        <input type="text" name="banner_text" value="{{$banner->banner_text}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Banner Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1"@if ($banner->status==1){
                                                selected
                                            }

                                            @endif>Active</option>
                                            <option value="2"@if ($banner->status==2){
                                                selected
                                            }

                                            @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                     <div class="form-gorup">
                                        <label>Banner Image</label><br>
                                        @if ($banner->banner_image==NULL)
                                          <img src="{{asset('backend/img/banner/default.jpg')}}" alt="" width="40">
                                        @else
                                          <img src="{{asset('backend/img/banner/'.$banner->banner_image)}}" alt="" width="40">
                                        @endif
                                        <input type="file" name="image" class="form-control-file">
                                     </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" name="updateBanner" value="Update Banner" class="custom-btn btn btn-teal mg-b-10">
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
