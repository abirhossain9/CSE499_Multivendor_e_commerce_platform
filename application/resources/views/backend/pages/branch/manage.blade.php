@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Branch</h4>
        <p class="mg-b-0">Manage All Branches From Here.</p>
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
                                    <th scope="col">Branch Name</th>
                                    <th scope="col">Bangla Name</th>
                                    <th scope="col">Address line 1</th>
                                    <th scope="col">Address line 2</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach($branches as $branch)

                                @php
                                $i++;
                                @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>{{$branch->name}}</td>
                                    <td>{{$branch->bangla_name}}</td>
                                    <td>{{$branch->address_line1}}</td>
                                    <td>{{$branch->address_line2}}</td>
                                    <td>{{$branch->email}}</td>
                                    <td>{{$branch->phone}}</td>
                                    <td>{{$branch->status}}</td>
                                    <td>Action</td>
                                </tr>


                                @endforeach

                            </tbody>
                        </table>

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
