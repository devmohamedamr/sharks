<?php

session_start();


if(empty($_SESSION['login'])){
    header("LOCATION: login.php");
}



echo "welcome ".$_SESSION['login'][0];

?>
<a href="logout.php">logout</a>