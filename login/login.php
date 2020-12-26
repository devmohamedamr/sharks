<?php
session_start();


if(!empty($_SESSION['login'])){
    header("LOCATION: index.php");
}


$dbusername = "test";
$dbpassword = "123";

if(isset($_POST['username'])){


    if($_POST['username'] == $dbusername && $_POST['password'] == $dbpassword){

        $user = [$_POST['username'],$_POST['password']];
        // $_SESSION["login"] =  $user;
        setcookie("login","mohamed",time() + 60,"/");

        header("LOCATION: index.php");    
    }else{
        echo "username and password not match";
    }


}




?>




<form action="login.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit"> 
</form>