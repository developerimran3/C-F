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

                <!-- All Documents-->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Delivery End All Documents</h2>
                                </div>
                            </div>
                        </div>


                        <!-- table srart -->
                        <div class="row column1 pt-lg-4">
                            <div class="col-md-12">
                                <div class="white_shd full p-4">
                                    <div class="heading1 m-0 p-0">
                                        <h2 class="">All Delivery Documents</h2>
                                    </div>
                                    <div class="row column1">
                                        <div class="col-md-12">
                                            <div class=" full">
                                                <div class="heading1 margin_0">
                                                    <table class="table table-bordered table-striped mb-none dataTable no-footer " id="dataTable">
                                                        <thead>
                                                            <tr class="delivery_tr">
                                                                <th>#</th>
                                                                <th>Importer Name</th>
                                                                <th>LC No</th>
                                                                <th>B/E No</th>
                                                                <th>B/E Date</th>
                                                                <th>Goods Name</th>
                                                                <th>Quantity</th>
                                                                <th>Cont. No</th>
                                                                <th>G.W</th>
                                                                <th>N.W</th>
                                                                <th>Dly. Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="delivery_tr">
                                                                <td>1</td>
                                                                <td>s ali weaving factory ltd</td>
                                                                <td>127224010125</td>
                                                                <td>C-1010121</td>
                                                                <td>01/11/2024</td>
                                                                <td class="font-weight-bold">ARTIFICIAL LEATHER</td>
                                                                <td>1209 Pkgs</td>
                                                                <td>msku5554267x40fcl</td>
                                                                <td>28500.00 kg</td>
                                                                <td>27800.00 kg</td>
                                                                <td>11/12/2024</td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info" href="#"><i class="fa fa-eye"></i></a>

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