@extends('backend.layout.template') @section('body')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Dashboard</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="d-md-flex justify-content-between pd-25">
                    <div>
                        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">How Engaged Our Users Daily</h6>
                        <p>Past 30 Days — Last Updated Oct 14, 2017</p>
                    </div>
                    <div class="d-sm-flex">
                        <div>
                            <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Bounce Rate</p>
                            <h4 class="tx-lato tx-inverse tx-bold mg-b-0">23.32%</h4>
                            <span class="tx-12 tx-success tx-roboto">2.7% increased</span>
                        </div>
                        <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                            <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Page Views</p>
                            <h4 class="tx-lato tx-inverse tx-bold mg-b-0">38.20%</h4>
                            <span class="tx-12 tx-danger tx-roboto">4.65% decreased</span>
                        </div>
                        <div class="bd-sm-l pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                            <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Time On Site</p>
                            <h4 class="tx-lato tx-inverse tx-bold mg-b-0">12:30</h4>
                            <span class="tx-12 tx-success tx-roboto">1.22% increased</span>
                        </div>
                    </div>
                    <!-- d-flex -->
                </div>
                <!-- d-flex -->

                <div class="pd-l-25 pd-r-15 pd-b-25">
                    <div id="ch5" class="ht-250 ht-sm-300"></div>
                </div>
            </div>
            <!-- card -->

            {{-- page body content end --}}
        </div>
    </div>
</div>
@endsection
