<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($con, "SELECT * FROM pelanggan WHERE username='$username' AND password='$password'");
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