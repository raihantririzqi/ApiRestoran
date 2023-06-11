<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_detail = $_POST['id_detail'];
    $query = mysqli_query($con, "SELECT * FROM detail_penjualan WHERE id_detail='$id_detail'");

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