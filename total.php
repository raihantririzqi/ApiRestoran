<?php
include "koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_pelanggan = $_POST['id_pelanggan'];
    $query = mysqli_query($con, "SELECT sum(total_menu * menu.harga) AS total_harga FROM detail_penjualan JOIN penjualan ON penjualan.id_penjualan=detail_penjualan.id_penjualan JOIN pelanggan ON pelanggan.id_pelanggan=penjualan.id_pelanggan JOIN menu ON menu.id_menu=detail_penjualan.id_menu WHERE pelanggan.id_pelanggan='$id_pelanggan' AND penjualan.status='pending'");
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
            "message" => "data tidak ada",
        ));
    }
}
