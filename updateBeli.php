<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_detail = $_POST['id_detail'];
    $total_menu = $_POST['total_menu'];
    $query = mysqli_query($con, "UPDATE detail_penjualan SET total_menu='$total_menu' WHERE id_detail='$id_detail'");
    if($query){
        echo json_encode(array(
            "code" => 1,
            "message" => "data berhasil di edit"
        ));
    }else{
        echo json_encode(array(
            "code" => 1,
            "message" => "data berhasil di edit"
        ));
    }
}