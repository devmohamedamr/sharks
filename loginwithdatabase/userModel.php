<?php

$con = mysqli_connect("localhost","root","","itsharks");

function GetUserData($user,$password){
    $sql = "SELECT * FROM `users` WHERE `username` = '$user' AND `password` = '$password'";
    $res = mysqli_query($GLOBALS['con'],$sql);
    // print_r($sql);die;
    if(mysqli_num_rows($res) > 0){

        $result =  mysqli_fetch_assoc($res);
        return $result;   
    }else{
        return false;
    }
}



function AddNewUser($user,$password,$email,$name){
    $sql = "INSERT INTO `users`(`name`, `username`, `email`, `password`) VALUES ('$name','$user','$email','$password')";
    $res = mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_affected_rows($GLOBALS['con']) > 0){
        return true;   
    }else{
        return false;
    }
}

function hash($password){

    $newpassword = sha1($password).md5($password);

    return $newpassword;
}