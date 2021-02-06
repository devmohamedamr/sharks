<?php
session_start();
require "userModel.php";
if(isset($_POST['username'])){
    $hash = sha1($_POST['password']);
    $data = GetUserData($_POST['username'],$hash);
    // print_r($data);die;
    if(isset($data)){
        $_SESSION['user'] = $data;
        header("LOCATION: home.php");
    }else{
        echo "user not registerd";
    } 
}
