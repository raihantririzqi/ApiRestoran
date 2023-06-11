<?php

include "koneksi.php";
$query = mysqli_query($con, "SELECT * FROM menu");
$data = array();

foreach($query as $row){
    $data[] = $row;
}

if(!empty($data)){
    echo json_encode(array(
        "code" => 1,
        "mesagge" => "data di temukan",
        "data" => $data
    ));
}else{
    echo json_encode(array(
        "code" => 1,
        "mesagge" => "data tidak ditemukan"
    ));
}