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


if(isset($_POST['name'])){
    // print_r($_FILES['img']);die;
    $type =  explode("/",$_FILES['img']['type']);
    $ext = end($type);
   move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_POST['name'].".".$ext);
}


?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="img">
    <input type="submit" value="send">
</form>