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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @if (!empty($message_plan))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $message_plan }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <input type="hidden" value="{{ $message_plan }}" name="message" id="msg">
                    </button>
                </div>
            @endif
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="margin-top:-3rem;">
                                <div class="card-body">
                                    <center>
                                        <h3 class=" my-2 ">Enter ZipCode, City or State to search</h3>
                                    </center>
                                    <form class="needs-validation my-6" novalidate action="{{ route('track-form') }}"
                                        method="GET">
                                        <div class="form-row" style="justify-content:center;">
                                            <div class="col-md-2">
                                                <label for="validationServer04" class="form-label">Country</label>

                                                <select class="form-control valid" id="status" name="status"
                                                    aria-describedby="validationServer04Feedback" required
                                                    aria-invalid="false">
                                                    <option value="Any">US</option>
                                                </select>
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    Please select a valid state.
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <label for="validationServer04" class="form-label">Carrier</label>

                                                <select class="form-control valid" id="status" name="status"
                                                    aria-describedby="validationServer04Feedback" required
                                                    aria-invalid="false">
                                                    <option value="Any">FedEx</option>
                                                </select>
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    Please select a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="validationCustom03">To City</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    name="city" placeholder="City" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid City.
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="validationCustom04">To State</label>
                                                <select class="form-control valid" id="validationCustom04" name="state"
                                                    aria-invalid="false" required>
                                                    <option value="Any">Any</option>
                                                    <option value="AB">AB</option>
                                                    <option value="AK">AK</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AR">AR</option>
                                                    <option value="AZ">AZ</option>
                                                    <option value="BC">BC</option>
                                                    <option value="CA">CA</option>
                                                    <option value="CO">CO</option>
                                                    <option value="CT">CT</option>
                                                    <option value="DC">DC</option>
                                                    <option value="DE">DE</option>
                                                    <option value="FL">FL</option>
                                                    <option value="GA">GA</option>
                                                    <option value="HI">HI</option>
                                                    <option value="IA">IA</option>
                                                    <option value="ID">ID</option>
                                                    <option value="IL">IL</option>
                                                    <option value="IN">IN</option>
                                                    <option value="KS">KS</option>
                                                    <option value="KY">KY</option>
                                                    <option value="LA">LA</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MB">MB</option>
                                                    <option value="MD">MD</option>
                                                    <option value="ME">ME</option>
                                                    <option value="MI">MI</option>
                                                    <option value="MN">MN</option>
                                                    <option value="MO">MO</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="NB">NB</option>
                                                    <option value="NC">NC</option>
                                                    <option value="ND">ND</option>
                                                    <option value="NE">NE</option>
                                                    <option value="NF">NF</option>
                                                    <option value="NH">NH</option>
                                                    <option value="NJ">NJ</option>
                                                    <option value="NM">NM</option>
                                                    <option value="NS">NS</option>
                                                    <option value="NV">NV</option>
                                                    <option value="NY">NY</option>
                                                    <option value="OH">OH</option>
                                                    <option value="OK">OK</option>
                                                    <option value="ON">ON</option>
                                                    <option value="OR">OR</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PQ">PQ</option>
                                                    <option value="RI">RI</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SK">SK</option>
                                                    <option value="TN">TN</option>
                                                    <option value="TX">TX</option>
                                                    <option value="UT">UT</option>
                                                    <option value="VA">VA</option>
                                                    <option value="VT">VT</option>
                                                    <option value="WA">WA</option>
                                                    <option value="WI">WI</option>
                                                    <option value="WV">WV</option>
                                                    <option value="WY">WY</option>
                                                    <option value="YT">YT</option>
                                                </select>

                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="validationCustom05">Zip</label>
                                                <input type="text" class="form-control" id="validationCustom05"
                                                    placeholder="Zip" name="zip" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row" style="justify-content:center;">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Shipping Date Range</label>
                                                <input type="date" class="form-control" id="validationCustom01"
                                                    name="ship" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Delivery Date Range</label>
                                                <input type="date" class="form-control" id="validationCustom02"
                                                    name="deliver" placeholder="Last name" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationServer04" class="form-label">Status</label>

                                                <select class="form-control valid" id="status" name="status"
                                                    aria-describedby="validationServer04Feedback" required
                                                    aria-invalid="false">
                                                    <option selected value="In transit">In transit</option>
                                                    <option value="Delivered">Delivered</option>
                                                </select>
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    Please select a valid Status.
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary" name="submit" type="submit">Search</button>

                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                    <div id="server-results">

                    </div>

                    <div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tracking Records</h4>

                                    <div class="table-responsive">
                                        <table id="ajex" class="table mb-0 table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Shipping Date</th>
                                                    <th>Delivery Date</th>
                                                    <th>To City</th>
                                                    <th>Status</th>
                                                    <th>Tracing ID</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $id = 1; ?>
                                                @if ($dis_matches)
                                                    @foreach ($dis_matches as $track)
                                                        <tr>
                                                            <td>{{ $track->t_ship }}</td>
                                                            <td>{{ $track->t_date }}</td>
                                                            <td>{{ $track->t_city }}</td>
                                                            <td>{{ $track->t_status }}</td>
                                                            <?php
                                                            $st = str_split($track->t_number, 5);
                                                            ?>
                                                            <td>{{ $st[0] }}********</td>
                                                            <input type="hidden" value="{{ $track->t_id }}"
                                                                id="myInput{{ $id }}">
                                                            <th><button id="n{{ $id }}" type="submit2"
                                                                    name="submit2"
                                                                    class="btn btn-secondary buttons-copy buttons-html5"
                                                                    tabindex="0"
                                                                    aria-controls="datatable-buttons"><span>Show</span></button>
                                                            </th>
                                                            <script>
                                                                val = this.value;
                                                                var myButton = document.getElementById("n{{ $id }}");
                                                                var msg = document.getElementById("msg");
                                                                myButton.addEventListener("click", function() {

                                                                    var copyText = document.getElementById("myInput{{ $id }}");
                                                                    copyText.select();
                                                                    navigator.clipboard.writeText(copyText.value);
                                                                    let c_id = copyText.value;
                                                                    //let message = msg.value;
                                                                    var m = $("#msg").val();
                                                                    // alert("Copied the text: " + c_id);
                                                                    // alert(m); 
                                                                    // message is null because plan is active _______optional security_________
                                                                    if (m == undefined) {
                                                                        // message is null because plan is active _______optional security_________
                                                                        $.ajax({
                                                                            url: "show",
                                                                            type: "GET",
                                                                            data: {
                                                                                "primary_key": c_id
                                                                            }
                                                                        }).done(function(response) { //
                                                                            $("#server-results").html(response);

                                                                        });
                                                                    }

                                                                });
                                                            </script>
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
                                    <!-- end card-body-->
                                </div>
                                <!-- end card -->

                            </div>


                        </div>
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
