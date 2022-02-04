@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Orders</h4>
        <p class="mg-b-0">Manage All Orders From Here.</p>
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
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Shop Name</th>
                                    <th scope="col">Buyer Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Order Created</th>
                                    <th scope="col">Delivery Address</th>
                                    <th scope="col">Shop Address</th>
                                    <th scope="col">Rider Status</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Completion Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($orders as $order)
                                @php $i++; @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>{{$order->product->product_name}}</td>
                                    <td>{{$order->shop->shop_name}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->product_quantity}}</td>
                                    <td>{{$order->product_final_price}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->shipping_address}}</td>
                                    <td>{{$order->shop->shop_address}}</td>
                                    <td>
                                        @if ($order->received_by_rider==0)
                                        <span class="badge badge-success">send rider to shop</span>
                                        @elseif ($order->received_by_rider==1)
                                        <span class="badge badge-danger">received product from shop</span>
                                        @elseif ($order->received_by_rider==2)
                                        <span class="badge badge-danger">product received</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->is_paid==0)
                                        <span class="badge badge-success">payment incomplete</span>
                                        @elseif ($order->is_paid==1)
                                        <span class="badge badge-danger">payment complete</span>
                                        @elseif ($order->is_paid==2)
                                        <span class="badge badge-danger">payment received by shop owner</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($order->is_complete==0)
                                        <span class="badge badge-success">order processing</span>
                                        @elseif ($order->is_complete==1)
                                        <span class="badge badge-danger">order shipped</span>
                                        @elseif ($order->is_complete==2)
                                        <span class="badge badge-danger">order complete</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('order.edit',$order->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#order{{$order->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="user{{$order->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete This order ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('user.destroy',$order->id)}}" method="POST">
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
                        @if ($orders->count()==0)
                            <div class="alert alert-info">
                                No orders are placed. please wait for an order first
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
