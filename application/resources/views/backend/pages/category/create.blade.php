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
                        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" name="name" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control" name="parent_id">
                                            <option value="0">Please Select Parent Category If Any</option>
                                            @foreach ($primary_category as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                   </div>
                                   <div class="form-group">
                                      <label>Category Description</label>
                                      <textarea class="form-control" rows="5" name="desc"></textarea>
                                   </div>
                                   <div class="form-group">
                                    <label>Category Image</label>
                                    <input class="form-control-file" type="file" name="image">
                                 </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="addCategory" value="Add New Category" class=" btn btn-success btn-teal mg-b-10">
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
