<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $total_menu = $_POST['total_menu'];
    $id_menu = $_POST['id_menu'];
    $id_penjualan = $_POST['id_penjualan'];

    $query = mysqli_query($con, "UPDATE detail_penjualan SET total_menu=total_menu + '$total_menu' WHERE id_menu='$id_menu' AND id_penjualan='$id_penjualan'");
    if($query){
        echo json_encode(array(
            "code" => 1,
            "message" => "data berhasil di update"
        ));
    }else{
        echo json_encode(array(
            "code" => 0,
            "message" => "data gagal di update"
        ));
    }
}