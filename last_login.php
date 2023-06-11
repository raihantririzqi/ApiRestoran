<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $datetime = date("Y-m-d H:i:s");
    $id_pelanggan = $_POST['id_pelanggan'];
    $query = mysqli_query($con, "UPDATE pelanggan SET last_login='$datetime' WHERE id_pelanggan='$id_pelanggan'");

    if($query){
        echo json_encode(array(
            "code" => 1,
            "messega" => "data berhasil di update",
        ));
    }else{
        echo json_encode(array(
            "code" => 0,
            "message" => "data gagal di update"
        ));
    }
}