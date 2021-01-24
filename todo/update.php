<?php


// echo $_GET['id'];

require "lib.php";
$data = select($_GET['id']);

if(isset($_POST['task'])){
  $res = update($_POST['task'],$_POST['id']);
    if($res > 0){
        header("LOCATION: index.php");
    }else{
        echo "task not updated";
    }
}

?>


<form action="update.php" method="post">
    <input type="text" value="<?= $data[0]['task']; ?>" name="task">
    <input type="hidden" value="<?= $_GET['id']; ?>" name="id" >
    <input type="submit" value="add">
</form>