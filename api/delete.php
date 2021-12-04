<?php
    include "../config/koneksi.php";

    $id = @$_POST['id'];

    $query = mysqli_query($kon, "DELETE FROM `barang` WHERE 'id'='". $id ."'");

    if($query){
        $status = true;
        $pesan = "request sucsses";
        $data[] = $query;
    }else{
        $status = false;
        $pesan = "request failed";
    }
    $json = [
        "status" => $status,
        "pesan" => $pesan, 
        "data" => $data
    ];
    header("content-type: application/json");
    echo json_encode($json);
?>