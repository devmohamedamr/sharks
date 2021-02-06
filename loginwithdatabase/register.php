<?php
require "userModel.php";


if(isset($_POST['user'])){
    $hash = sha1($_POST['password']);
   $res =  AddNewUser($_POST['user'],$hash,$_POST['email'],$_POST['name']);
    if($res == 1){
        header("LOCATION: index.php");
    }
}

?>

<form action="register.php" method="post"> 
    <input type="text" name="name" placeholder="name">
    <input type="text" name="user" placeholder="username">
    <input type="password" name="password" placeholder="username">
    <input type="text" name="email" placeholder="email">
    <input type="submit" value="send">
</form>