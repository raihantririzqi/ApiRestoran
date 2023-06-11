<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_menu = $_POST['id_menu'];
    $query = mysqli_query($con, "SELECT * FROM menu WHERE id_menu='$id_menu'");
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
            "message" => "data tidak ditemukan"
        ));
    }
}