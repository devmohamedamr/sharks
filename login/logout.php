<?php

session_start();

if(!empty($_SESSION['login'])){
    session_destroy();
    header("LOCATION: login.php");
}else{
    header("LOCATION: login.php");
}

