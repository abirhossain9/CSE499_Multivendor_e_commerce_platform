@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Shops</h4>
        <p class="mg-b-0">Manage All Shops From Here.</p>
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Shop Name</th>
                                    <th scope="col">Shop Owner ID</th>
                                    <th scope="col">Shop Address</th>
                                    <th scope="col">Shop Phone No</th>
                                    <th scope="col">Shop Type</th>
                                    <th scope="col">Shop Description</th>
                                    <th scope="col">Shop Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($shops as $shop)
                                @php $i++; @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>@if ($shop->image==NULL)
                                         <img src="{{asset('backend/img/shop/default.jpg')}}" alt="" width="40">
                                    @else
                                         <img src="{{asset('frontend/images/shops/'.$shop->image)}}" alt="" width="40">

                                    @endif</td>
                                    <td>{{$shop->shop_name}}</td>
                                    <td>{{$shop->shop_owner}}</td>
                                    <td>{{$shop->shop_address}}</td>
                                    <td>{{$shop->shop_phone}}</td>
                                    <td>{{$shop->shop_type}}</td>
                                    <td>{{$shop->shop_description}}</td>
                                    <td>
                                        @if ($shop->shop_status==1)
                                        <span class="badge badge-success">active</span>
                                        @elseif ($shop->shop_status==2)
                                        <span class="badge badge-danger">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('shop.edit',$shop->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#shop{{$shop->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="user{{$shop->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete This shop ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('user.destroy',$shop->id)}}" method="POST">
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
                                @endforeach

                            </tbody>
                        </table>
                        @if ($shops->count()==0)
                            <div class="alert alert-info">
                                No Shops are added please add a shop first
                            </div>
                        @endif

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
