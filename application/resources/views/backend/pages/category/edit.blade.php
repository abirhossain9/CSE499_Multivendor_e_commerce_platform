@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update The Employee Information</h4>
        <p class="mg-b-0">Update Employee Information Of selected employee</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

           <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" value="{{$category->name}}" name="name" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control" name="parent_id">
                                            <option value="0">Please Select Parent Category If Any</option>
                                            @foreach ($primary_category as $pc)
                                            <option value="{{$pc->id}}" @if($pc->id == $category->parent_id)
                                                selected
                                            @endif>{{$pc->name}}</option>
                                            @endforeach
                                        </select>
                                   </div>
                                   <div class="form-group">
                                      <label>Category Description</label>
                                      <textarea class="form-control" rows="5" name="desc">{{$category->desc}}</textarea>
                                   </div>
                                   <div class="form-group">
                                    <label>Category Image</label><br>
                                    @if($category->image == null)
                                    no image uploaded
                                    @else
                                    <img src="{{asset('backend/img/category/'.$category->image)}}" alt="" width="40">
                                    @endif
                                    <input class="form-control-file" type="file" name="image">
                                   </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="updateCategory" value="Update Category" class=" btn btn-success btn-teal mg-b-10">
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
