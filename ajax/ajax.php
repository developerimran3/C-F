<?php
if (file_exists(__DIR__ . "/../autoload.php")) {
    require_once __DIR__ . "/../autoload.php";
}


if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case "entydata";
        $importer_name = $_POST['importer_name'];
        $goods_name = $_POST['goods_name'];
        $quantity = $_POST['quantity'];
        $pkg_code = $_POST['pkg_code'];
        $vessel = $_POST['vassel_name'];
        $bl_no = $_POST['bl_no'];
        $container_no = $_POST['container_no'];
        $container_size = $_POST['container_size'];
        $container_location = $_POST['container_location'];
        $lc_no = $_POST['lc_no'];
        $lc_date = $_POST['lc_date'];
        $gross_weight = $_POST['gross_weight'];
        $arivel_date = $_POST['arivel_date'];

        store('enty', [
            'importer_name'         => $importer_name,
            'goods_name'            => $goods_name,
            'quantity'              => $quantity,
            'pkg_code'              => $pkg_code,
            'vassel_name'           => $vessel,
            'bl_no'                 => $bl_no,
            'container_no'          => $container_no,
            'container_size'        => $container_size,
            'container_location'    => $container_location,
            'lc_no'                 => $lc_no,
            'lc_date'               => $lc_date,
            'gross_weight'          => $gross_weight,
            'arivel_date'           => $arivel_date,
        ]);

        break;

    case "received";
        echo update('enty', 23, [
            " document_received" => $document_received,
            " invoice_value" => $invoice_value,
            " invoice_no" => $invoice_no,
            " invoice_date" => $invoice_date,
            " net_weight" => $net_weight,
        ]);


        break;

    case "register_enty";
        echo "hi";
        break;

    case "assessment";
        echo "hi";
        break;

    case "delivery";
        echo "hi";
        break;
};
