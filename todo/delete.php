<?php
require "lib.php";

$res = delete($_GET['id']);

if($res > 0){
    header("LOCATION: index.php");
}else{
   echo "task not deleted";
}