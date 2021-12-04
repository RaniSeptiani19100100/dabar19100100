<?php

include "../config/koneksi.php";

$username = $POST['Username'];
$password = md5(@$_POST['password']);

$data = [];

$query = mysqli_query($kon, "SELECT * FROM `admin` WHERE `Username` = '". $Username ."'
&&
`Password` = '". $Password ."'");

if($query){
    $status = true;
    $pesan = "request succes";
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
header("Content-type: application/json");
echo json_encode($json);

?>