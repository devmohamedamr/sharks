<?php

if($_GET['lang'] == "en"){
    include "en.php";
}else{
    include "ar.php";
}

echo $lang['name'];
// echo "<pre>";
// print_r($_COOKIE);die;


// setcookie("login","mohamed",time() + 60,"/");

