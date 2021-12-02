@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All product</h4>
        <p class="mg-b-0">Manage All product From Here.</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="d-md-flex justify-content-between pd-25">

                    {{-- Table Content start --}}
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table table-bordered table-striped table-hover table-custom">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#sl.</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Product Description</th>
                                    <th scope="col">Product Category</th>
                                    <th scope="col">Product By</th>
                                    <th scope="col">Product Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @php $i++; @endphp
                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td><img src="{{asset('backend/img/shop/default.jpg')}}" alt="" width="40"></td>
                                    <td>Product Name</td>
                                    <td>Product Price</td>
                                    <td>Product Description</td>
                                    <td>Product Category</td>
                                    <td>Shop Name</td>
                                    <td>
                                        <span class="badge badge-success">active</span>
                                        <span class="badge badge-danger">inactive</span>
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="user"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete This product?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                                </form>

                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>

                            </tbody>
                        </table>
                        {{-- @if ()
                            <div class="alert alert-info">
                                No Shops are added please add a shop first
                            </div>
                        @endif --}}

                    </div>

                    {{-- Table Content end --}}
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
