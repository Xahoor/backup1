<?php
session_start();

include_once "../config/db.php";
include_once "core.php";
$data = new core($conn);

if($_POST['type']==1){

    $update = $data->privacy($_POST);
    if($update=='success'){
        echo json_encode(["statusCode"=>200]);
    }else if($update=='old'){
        echo json_encode(["statusCode"=>201]);
    }
}
?>