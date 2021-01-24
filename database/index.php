<?php
// error_reporting(1);

// if(isset($_POST['task'])){

define('SERVER',"localhost");
define('USER',"root");
define('PASSWORD',"");
define('DATABASE',"itsharks");

// $task = $_POST['task'];
// $task2 = $_POST['task2'];

//  1 - connection
$con = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);
//  2 - query
// $sql = "INSERT INTO `todo`( `taskw`) VALUES ( '$task' )";
    // $sql = "DELETE FROM `todo` WHERE id = $task";
// $sql = "UPDATE `todo` SET `task`= '$task' WHERE `id` = $task2";
$sql = "SELECT * FROM `todo`";
$result = mysqli_query($con,$sql);

$num_rows =  mysqli_num_rows($result);

if($num_rows > 0){

  while($afnan =   mysqli_fetch_assoc($result)){
    $ibrahem[] = $afnan;
  } 

}else{
    echo "not found";
}
// $affected = mysqli_affected_rows($con);

// if($affected > 0){
//     echo "success";
// }else{
//     echo "error";
// }


// }


?>

<!-- <form action="index.php" method="post">
    <input type="text" name="task">
    <input type="text" name="task2">
    <input type="submit" value="save">
</form> -->