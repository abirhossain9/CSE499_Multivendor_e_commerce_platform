@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Coupon</h4>
        <p class="mg-b-0">Manage All The Coupn Codes From Here.</p>
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
                                    <th scope="col">Coupon Code</th>
                                    <th scope="col">Coupon Type</th>
                                    <th scope="col">Fixed Ammount</th>
                                    <th scope="col">Percent Off</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($coupons as $coupon)
                                @php $i++; @endphp
                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>{{$coupon->code}}</td>
                                    <td>
                                        @if ($coupon->discount_type==1)
                                        <span class="badge badge-dark">Fixed Amount</span>
                                        @elseif ($coupon->discount_type==2)
                                        <span class="badge badge-warning">Percentage Off</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($coupon->fixed_value))
                                        {{$coupon->fixed_value }} BDT
                                        @else
                                        -/-
                                        @endif
                                    </td>
                                    <td>
                                        @if (!empty($coupon->percent_value))
                                        {{$coupon->percent_value }} %
                                        @else
                                        -/-
                                        @endif
                                    </td>
                                    <td>
                                        @if ($coupon->status==1)
                                        <span class="badge badge-success">active</span>
                                        @elseif ($coupon->status==2)
                                        <span class="badge badge-danger">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('coupon.edit',$coupon->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#coupon{{$coupon->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="coupon{{$coupon->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delte This Coupon ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('coupon.destroy',$coupon->id)}}" method="POST">
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
                        @if ($coupons->count()==0)
                            <div class="alert alert-info">
                                No coupon added please add a coupon first
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
