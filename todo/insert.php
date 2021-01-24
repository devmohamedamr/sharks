<?php
require "lib.php";

if(isset($_POST['task'])){
   $res =  insert($_POST['task']);
   if($res > 0){
        header("LOCATION: index.php");
   }else{
       echo "task not added";
   }
}

?>


<form action="insert.php" method="post">
    <input type="text" name="task">
    <input type="submit" value="add">
</form>