
@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    @extends('layouts.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
    @if ($message)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


        <div class="page-content">
            <div class="container-fluid" style="margin-top:-6rem;">

                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <!-- Plans -->
                        <div class="row mt-sm-5 mt-3 mb-3">
                            @foreach ($users as $plan )
                            <div class="col-md-4">
                                <div class="cardd card card-pricing">
                                    <div class="card-body text-center">
                                        <span>
                                            <i class="card-pricing-icon b mdi mdi-airplane text-danger"></i>
                                        </span>
                                        <h5 class="font-weight-bold mt-4 text-uppercase">{{$plan->p_name}}</h5>
                                        <ul class="card-pricing-features">
                                            <li>{{$plan->p_des}}</li>
                                            <li>{{$plan->p_limit}} Unique Trackings</li>
                                            <li>{{$plan->validation}} Month</li>
                                            <h2 class="mt-4">${{$plan->p_amount}}</h2>
                                        </ul>
                                        <form action="{{ route('session') }}" method="POST">
                                            <button value="{{ $plan->p_id }}" class="btn btn-primary mt-4 mb-2 btn-rounded" type="submit" name="submit">CHECKOUT<i class="mdi mdi-arrow-right ml-1"></i></button>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <!-- @if(session('message'))
                                                <div class="alert alert-danger">
                                                {{ session('message') }}
                                            </div>
                                            @endif -->
                                        </form>
                                        
                                    </div>
                                </div> <!-- end Pricing_card -->
                            </div> <!-- end col -->
                            @endforeach

                        </div>
                        <!-- end row -->

                    </div> <!-- end col-->
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @extends('layouts.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Overlay-->
<div class="menu-overlay"></div>

<!-- jQuery  -->
<script src="assetss-dashboard/js/jquery.min.js"></script>
<script src="assetss-dashboard/js/bootstrap.bundle.min.js"></script>
<script src="assetss-dashboard/js/metismenu.min.js"></script>
<script src="assetss-dashboard/js/waves.js"></script>
<script src="assetss-dashboard/js/simplebar.min.js"></script>

<!-- App js -->
<script src="assetss-dashboard/js/theme.js"></script>
<!-- jQuery  -->

@endsection


