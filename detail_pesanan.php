<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_pelanggan = $_POST['id_pelanggan'];
    $query = mysqli_query($con, "SELECT id_penjualan FROM penjualan WHERE id_pelanggan='$id_pelanggan' AND status='pending'");
    $data = array();

    foreach($query as $row){
        $data[] = $row;
    }

    if(!empty($data)){
        echo json_encode(array(
            "code" => 1,
            "message" => "data di temukan",
            "data" => $data
        ));
    }else{
        echo json_encode(array(
            "code" => 0,
            "message" => "data tidak di temukan",
        ));
    }
}