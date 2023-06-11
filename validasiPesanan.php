<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_penjualan = $_POST['id_penjualan'];
    $id_menu = $_POST['id_menu'];

    $query = mysqli_query($con, "SELECT * FROM detail_penjualan WHERE id_penjualan='$id_penjualan' AND id_menu='$id_menu'");
    $data = array();

    foreach($query as $row){
        $data[] = $row;
    }

    if(!empty($data)){
        echo json_encode(array(
            "code" => 1,
            "message" => "data ditemukan",
            "data" => $data
        ));
    }else{
        echo json_encode(array(
            "code" => 0,
            "message" => "data tidak tersedia"
        ));
    }
}