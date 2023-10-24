@extends('layouts.app') @section('content') @if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session("status") }}
</div>
@endif

<!-- Begin page -->
<div id="layout-wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @extends('layouts.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
    <div class="row  justify-content-center">
                    <!-- <div class="col-xl-4 col-lg-5">
                        <div class="">
                            <div class="">
                               
                                <div id="morris-donut-example" class="morris-chart"></div>
                            </div>
                        </div>
                      
                    </div> -->
                </div>
        <div class="page-content">
            <div class="container-fluid">
                <!-- end row-->
                
                <!-- end row-->
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase font-size-12 text-muted mb-3">
                                            Trackings
                                        </h6>
                                            @foreach ($recent as $track )
                                            
                                        <span class="h3 mb-0"> {{$track->total}} </span>
                                            @endforeach
                                        <h6 class="text-uppercase font-size-12 text-muted mt-4">
                                            Total
                                        </h6>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div id="sparkline1" class="mt-3"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->

                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase font-size-12 text-muted mb-3">
                                            Trackings
                                        </h6>
                                        @foreach ($recent as $track )
                                        <span class="h3 mb-0"> {{$track->count}} </span>
                                            @endforeach
                                        </span>
                                        <h6 class="text-uppercase font-size-12 text-muted mt-4">
                                            Used
                                        </h6>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div id="sparkline2" class="mt-3"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->

                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="text-uppercase font-size-12 text-muted mb-3">
                                            Trackings
                                        </h6>
                                        @foreach ($recent as $track )
                                        <span class="h3 mb-0"> {{$track->remaining}} </span>
                                            @endforeach
                                        <h6 class="text-uppercase font-size-12 text-muted mt-4">
                                            Balance
                                        </h6>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div id="sparkline3" class="mt-3"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Your Subscriptions</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-striped table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Total</th>
                                                <th>Used</th>
                                                <th>Remaining</th>
                                                <th>Expire On</th>
                                                <th>Created At</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $id = 1; ?>
                                            @if($recent->isNotEmpty())
                                            @foreach ($recent as $track )
                                            <tr>
                                                <td>{{$id}}</td>
                                                <td>{{$track->total}}</td>
                                                <td>{{$track->count}}</td>
                                                <td>{{$track->remaining}}</td>
                                                <td>{{$track->expire_date}}</td>
                                                <td>{{$track->issue_date}}</td>
                                                <td>{{$track->p_amount}} $</td>
                                                <td>{{$track->status}}</td>
                                            </tr>
                                            <?php $id++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                    <div>
                                        <h2>No Record Found</h2>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @extends('layouts.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

<!-- Overlay-->
<div class="menu-overlay"></div>

<script src="assetss-dashboard/js/jquery.min.js"></script>
<script src="assetss-dashboard/js/bootstrap.bundle.min.js"></script>
<script src="assetss-dashboard/js/metismenu.min.js"></script>
<script src="assetss-dashboard/js/waves.js"></script>
<script src="assetss-dashboard/js/simplebar.min.js"></script>

<!-- Sparkline Js-->
<script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- Morris Js-->
<script src="plugins/morris-js/morris.min.js"></script>
<!-- Raphael Js-->
<script src="plugins/raphael/raphael.min.js"></script>

<!-- Custom Js -->
<script src="assetss-dashboard/pages/dashboard-demo.js"></script>

<!-- App js -->
<script src="assetss-dashboard/js/theme.js"></script>
@endsection