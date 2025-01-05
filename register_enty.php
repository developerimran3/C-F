?>
<?php include_once __DIR__ . '/templates/header.php'; ?>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php include_once __DIR__ . '/templates/sidebar.php'; ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php include_once __DIR__ . '/templates/topbar.php'; ?>
                <!-- end topbar -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Registered <small>(C- Number)</small> </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row column1">
                            <div class="col-md-12">
                                <div class="white_shd full p-4">
                                    <div class="heading1 margin_0">
                                        <h2>Documents Details</h2>
                                        <hr class="m-0">
                                    </div>
                                    <form id="register" method="POST">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="be_no">B/E Number</label>
                                                <input type="text" name="be_no" class="form-control" placeholder="B/E Number">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="be_date">B/E Date</label>
                                                <input type="date" name="be_date" class="form-control" placeholder="B/E Date">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="be_lane">B/E Lane</label>
                                                <select name="be_lane" id="" class="form-control">
                                                    <option hidden>Select One</option>
                                                    <option value="YELLOW">YELLOW LANE</option>
                                                    <option value="20' FCL">RED LALE</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 my-3">
                                                <button type="submit" class="main_bt">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- table srart -->
                        <div class="row column1 pt-lg-4">
                            <div class="col-md-12">
                                <div class="white_shd full p-4">
                                    <div class="heading1 m-0 p-0">
                                        <h2 class="">All Registered Documents</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <table class="table table-bordered table-striped mb-none dataTable no-footer " id="dataTable">
                                                        <thead>
                                                            <tr class="register_enty">
                                                                <th>#</th>
                                                                <th>Importer Name</th>
                                                                <th>Lc No</th>
                                                                <th>Goods Name</th>
                                                                <th>Quantity</th>
                                                                <th>B/E No</th>
                                                                <th>B/E Date</th>
                                                                <th>B/E Lane</th>
                                                                <th>BL No</th>
                                                                <th>Cont. No</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="register_enty">
                                                                <td>1</td>
                                                                <td>s ali weaving factory ltd</td>
                                                                <td>127224010198</td>
                                                                <td class="font-weight-bold">ARTIFICIAL LEATHER</td>
                                                                <td>1209 Pkgs</td>
                                                                <td>c- 1258695</td>
                                                                <td>01/11/2024</td>
                                                                <td>Yellow Lane</td>
                                                                <td>231154326121</td>
                                                                <td>msku5554267x40fcl</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                                                                    <a class="btn btn-sm btn-success" href="#"><i class="fa fa-arrow-circle-right "></i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- table end -->
                                                <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
                                                <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.1.7/datatables.min.js"></script>
                                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                                <script src="./ajax/ajax.js"></script>
                                                <script>
                                                    $("#dataTable").DataTable();
                                                </script>