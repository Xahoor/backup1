<?php


include_once "../config/db.php";
include_once "core.php";
$admin = new core($conn);


// echo $_POST["gmail"];

$update = $admin->add_vehicle($_POST);


if($update=='success'){
echo json_encode(["statusCode"=>200]);
}else{
echo json_encode(["statusCode"=>201]);
}



?>