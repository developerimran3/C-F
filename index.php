<!-- Header start  -->
<?php include_once __DIR__ . '/templates/header.php'; ?>
<!-- Header end  -->


<body class="index_page">
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-3">
                    <label for="importer_name">Importer Name</label>
                    <input type="text" name="importer_name" class="form-control" placeholder="Importer Name">
                </div>
                <div class="col-md-3">
                    <label for="goods_name">Goods Name</label>
                    <input type="text" name="goods_name" class="form-control" placeholder="Goods Name">
                </div>
                <div class="col-md-3">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                </div>
                <div class="col-md-3">
                    <label for="pkg_code">Pkgs Code</label>
                    <select name="pkg_code" id="" class="form-control">
                        <option hidden>Pkg Code</option>
                        <option value="ROLLS">ROLLS</option>
                        <option value="PKGS">PKGS</option>
                        <option value="BALES">BALES</option>
                        <option value="CTNS">CTNS</option>
                        <option value="BAGS">BAGS</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="bl_no">BL No</label>
                    <input type="text" name="bl_no" class="form-control" placeholder="BL No">
                </div>
                <div class="col-md-3">
                    <label for="container_no">Container Number</label>
                    <input type="text" name="container_no" class="form-control" placeholder="Container Number">
                </div>
                <div class="col-md-3">
                    <label for="container_size">Container Size</label>
                    <select name="container_size" id="" class="form-control">
                        <option hidden>Container Size</option>
                        <option value="20' FCL">20' FCL</option>
                        <option value="40' FCL">40' FCL</option>
                        <option value="20' LCL">20' LCL</option>
                        <option value="40' LCL">40' LCL</option>
                        <option value="BULK">BULK</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="container_location">Container Location</label>
                    <input type="text" name="container_location" value="Y-" class="form-control" placeholder="Container Location">
                </div>
                <div class="col-md-3">
                    <label for=" lc_no">Lc Number</label>
                    <input type="text" name="lc_no" class="form-control" placeholder="Lc Number">
                </div>
                <div class="col-md-3">
                    <label for="lc_date">LC Date</label>
                    <input type="date" name="lc_date" class="form-control" placeholder="LC Date">
                </div>

                <div class="col-md-3">
                    <label for="gross_weight">Gross Weight</label>
                    <input type="number" name="gross_weight" class="form-control" placeholder="Gross Weight">
                </div>

                <div class="col-md-3">
                    <label for="arivel_date">Arivel Date</label>
                    <input type="date" name="arivel_date" class="form-control" placeholder="Arivel Date">
                </div>
                <!-- <div class="col-md-3">
                    <label for="document_receiver">Document Receiver</label>
                    <input type="date" name="document_receiver" class="form-control" placeholder="Document Receiver">
                </div>
                <div class="col-md-3">
                    <label for="invoice_value">Invoice Value</label>
                    <input type="number" name="invoice_value" class="form-control" placeholder="Invoice Value">
                </div>
                <div class="col-md-3">
                    <label for="invoice_no">Invoice Number</label>
                    <input type="text" name="invoice_no" class="form-control" placeholder="Invoice Number">
                </div>
                <div class="col-md-3">
                    <label for="invoice_date">Invoice Date</label>
                    <input type="date" name="invoice_date" class="form-control" placeholder="Invoice Date">
                </div>
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
                        <option hidden>B/E LANE</option>
                        <option value="YELLOW">YELLOW LANE</option>
                        <option value="20' FCL">RED LALE</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="net_weight">Net Weight</label>
                    <input type="number" name="net_weight" class="form-control" placeholder="Net Weight">
                </div>

                <div class="col-md-3">
                    <label for="assessment_date">Assessment Date</label>
                    <input type="date" name="assessment_date" class="form-control" placeholder="Assessment Date">
                </div>
                <div class="col-md-3">
                    <label for="delivery_date">Delivery Date</label>
                    <input type="date" name="delivery_date" class="form-control" placeholder="Delivery Date">
                </div>
                <div class="col-md-3">
                    <label for="scann_document">Scann Document</label>
                    <input type="file" name="scann_document" class="form-control">
                </div> -->
                <div class="col-md-6 my-3">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                </div>

            </div>
        </form>

    </div>

    <!-- footer -->
    <?php include_once __DIR__ . '/templates/footer.php'; ?>