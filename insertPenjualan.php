<?php

use function PHPSTORM_META\map;

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tanggal = date("Y-m-d");
    $id_pelanggan = $_POST['id_pelanggan'];
    $query = mysqli_query($con, "INSERT INTO penjualan (tgl_penjualan,id_pelanggan,id_kasir,status) VALUES ('$tanggal','$id_pelanggan','0','pending')");
    
    if($query){
        echo json_encode(array(
            "code" => 1,
            "message" => "data berhasil di tambahkan",
        ));
    }else{
        echo json_encode(array(
            "code" => 0,
            "message" => "data gagal di tambahkan"
        ));
    }
}