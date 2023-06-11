<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_penjualan = $_POST['id_penjualan'];
    $id_menu = $_POST['id_menu'];
    $total_menu = $_POST['total_menu'];

    $query = mysqli_query($con, "INSERT INTO detail_penjualan (id_penjualan,id_menu,total_menu) VALUES ('$id_penjualan','$id_menu','$total_menu')");

    if($query){
        echo json_encode(array(
            "code" => 1,
            "message" => "data berhasil di tambahkan"
        ));
    }else{
        echo json_encode(array(
            "code" => 0,
            "message" => "data gagal di tambahkan"
        ));
    }
    
}