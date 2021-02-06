<?php
session_start();


if(empty($_SESSION['user'])){
    header("LOCATION: index.php");
}


echo "home";