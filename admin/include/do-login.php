<?php


include_once "../config/db.php";
include_once "Login.php";
$admin = new Login($conn);



if($_POST['type']==1){
    $login = $admin->admin_login($_POST);
    if($login){
        echo json_encode(["statusCode"=>200]);
        // header('loacation: ../')
    }else{
        echo json_encode(["statusCode"=>201]);
    }
}


?>