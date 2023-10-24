@extends('layouts.app')
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session("status") }}
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
        <div class="page-content">
            <div class="container-fluid">
                <div class="row"></div>
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tracking Number</th>
                                            <th>Shpping Date</th>
                                            <th>Delivery Date</th>
                                            <th>Destination</th>
                                            <th>Used at</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $id=1; ?>
                                        @foreach ($recent as $track )
                                        <tr>
                                            <td>{{$id}}</td>
                                            <td>{{$track->t_number}}</td>
                                            <td>{{$track->t_ship}}</td>
                                            <td>{{$track->t_date}}</td>
                                            <td>{{$track->t_city}}</td>
                                            <td>{{$track->t_status}}</td>
                                        </tr>
                                        <?php $id++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <!-- end row-->

                <!-- end row-->

                <!-- end row-->

                <!-- end row-->
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
<div class="menu-overlay">

</div>

<!-- jQuery  -->
<!-- jQuery  -->
<script src="assetss-dashboard/js/jquery.min.js"></script>
<script src="assetss-dashboard/js/bootstrap.bundle.min.js"></script>
<script src="assetss-dashboard/js/metismenu.min.js"></script>
<script src="assetss-dashboard/js/waves.js"></script>
<script src="assetss-dashboard/js/simplebar.min.js"></script>

<!-- third party js -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<script src="plugins/datatables/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables/buttons.html5.min.js"></script>
<script src="plugins/datatables/buttons.flash.min.js"></script>
<script src="plugins/datatables/buttons.print.min.js"></script>
<script src="plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="plugins/datatables/dataTables.select.min.js"></script>
<script src="plugins/datatables/pdfmake.min.js"></script>
<script src="plugins/datatables/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="assetss-dashboard/pages/datatables-demo.js"></script>

<!-- App js -->
<script src="assetss-dashboard/js/theme.js"></script>

@endsection