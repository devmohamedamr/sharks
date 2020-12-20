<?php
session_start();


if(!isset($_SESSION['user'])){
    header("LOCATION: index.html");
}

//  username from database
// $username = "ahmed";
// if($username == "ahmed")
// {
//     echo $username;
// }else{
//     echo 'error one';
// }

// if($username == "ahmed")
// {
//     echo $username;
// }else{
//     echo 'error two';
// }

// if($username == 'ahmed'){
//     echo 'ahmed';
// }elseif($username == 'mohamed'){
//     echo 'mohamed';
// }else{
//     echo 'error';
// }

// if($username == 'ahmed'):
//     echo 'ahmed';
// elseif($username == 'mohamed'):
//     echo 'mohamed';
// else:
//     echo 'error';
// endif;
    

// $x =  $_POST['x'];
// $y =  $_POST['y'];

// echo $x + $y;


// define("database_username","mohamed");
// define("database_password","123456");

// $username = $_POST['username'];
// $password = $_POST['password'];

// if($username == database_username AND $password == database_password){
//     echo 'success';
// }else{
//     echo 'error';
// }

// $name = 'mohamed';

// echo "my name is $name <br>";
// echo 'my name is $name <br>';
// echo "my name is $name <br>";




// if(20>10 and 30<20){
//     echo 'true';
// }else{
//     echo 'false';
// }

// if(true && false){
//     echo 'true';
// }else{
//     echo 'false';
// }

// if(true and false){
//     echo 'true';
// }else{
//     echo 'false';
// }




// if(20>10 && 30<20){
//     echo 'true';
// }else{
//     echo 'false';
// }


// $name = "mohamed";
// $n = false and true;
// $w = true && false;

// echo ($n) ? 'success' : 'error';

// $l = $_POST['l'];
// $oil = $_POST['oil'];


// if($oil == '92'){
//     echo $l * 5;
// }elseif($oil == '90'){
//     echo $l * 2.5;
// }elseif($oil == '80'){
//     echo $l * 1;
// }else{
//     echo 'انت عبيط';
// }

// switch($oil){
//     case 90:
//         echo $l * 2;
//     break;    
//     case 90:
//          echo $l * 10;
//     break; 
//     case 90:
//          echo $l * 3;
//     break;
// }

// echo "<table border='1'>";
// for($y = 1;$y<=8;$y++){
//     echo "<tr>";
//     for($x=1;$x<=8;$x++){
//         $total = $x +$y;
//         echo "<td>".$total."</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";


// for($c = 0;$c<=15;$c++){
//     echo "<h1 style='color:red'>$c</h1>";
// }



// $n = 10;
// $n = $n++ + 20;
// // echo $n;
// echo ++$n - 2;
// $n + 3;
// $n-- + 10;
// echo $n;
// echo ++$n;
// $n++;
// echo $n;



// echo "<style>
//     .s{
//         color:red;
//     }
// </style>";
// echo "<h1 class='s'>ahmed</h1>";


// for($i=0;$i<10;$i++){
   
//     if($i == 4){
//         continue;
//     }
//     echo $i . "<br>";
// }

// indexed
// $names = array("mohamed","ahmed");
// $names = ["mohamed","ahmed",32.23,true,"ww","www"];
// $c = count($names);
// // echo count($names);
// for($i=0;$i<$c;$i++){
//     echo $names[$i] . "<br>";
// }




// $person = ["name"=>"mohamed","age"=> 20];

// $person = [
// "ahmed",
//  20
// ];

// for($i=0;$i<2;$i++){
//     echo $person[$i] . "<br>";
// }

// foreach($person as $www => $mmm):
//     echo $www." : ".$mmm."<br>";
// endforeach;

// print_r($person);


$person = [
    ["name" => "ahmed",
    "age"  =>     20]
    ,
    ["name" => "mahmoud",
    "age" => 90]
];

// foreach($person as $value){

//     foreach($value as $k => $v){
//         echo $k." : ".$v."<br>";
//     }
//     echo "<hr>";
// }   



// for($i=0;$i<=1;$i++){
    
//     foreach($person[$i] as $k => $v){
//         echo $k." : ".$v."<br>";
//     }
//     echo "<hr>";
// }



// $list = ["mohamed","ahmed","radwa","eslam"];

// echo "<ol>";
// foreach($list as $value){
//     // echo  $value . "<br>";
//     echo "<li>".$value."</li>";
// }

// echo "</ol>";







// function welcome($name,$x){
//     echo "welcome ya $name";
// }

// welcome("eslam","sdsad");






// function add($x,$y){
//     echo $x + $y;
// }
// add($_POST['x'],$_POST['y']);



// function number($x){
    
//     echo $x;
//     return $x;
// }




// echo  number(20) + 30;
// number(20);






function ismohamed($name){
    if($name == "mohamed"){
        echo true;
    }else{
        echo false;
    }
}




// $name = "mohamed";

// if( ismohamed($name)){
//     echo "success";
// }else{
//     echo "error";
// }


// ismohamed($name);



// $num = [20,30,10,5,6,8];

// echo max($num);

// function getmin($array){

//     $max = $array[0];
//     // $count = count($array);
//     foreach($array as $v){
//         if($max > $v){
//             $max = $v;
//         }
//     }
//     return $max;
// }

// echo getmin($num);
















// function getmin($array){
//     if(is_array($array)){
//         $min = $array[0];
//         foreach($array as $value){
//             if($value < $min){
//                 $min = $value;
//             }
//         }
//         return $min;
//     }else{
//         return false;
//     }
// }

// $numbers = [20,3,6,1,19,50];
// $numbers = "asdsadas";

// function getmax($array){
//     if(is_array($array)){
//         $max = $array[0];
//         foreach($array as $value){
//             if($max < $value){
//                 $max = $value;
//             }
//         }
//         return $max;
//     }else{
//         echo "var is not array";
//     }
// }
// echo getmin($numbers);
// echo getmax($numbers);





// var_dump($_POST);
// if(isset($_POST['username'])){
//     echo $_POST['username'];
// }








// require "val.php";

// if( isset($_POST['username']) || isset($_POST['password']) ){

//     validation($_POST['username'],$_POST['password']);
// }

    // if(isset($_REQUEST['username'])){
    //     echo $_REQUEST['username'];
    // }







        // var_dump($_SESSION);

        // $_SESSION['name'] = "ahmed";


        // echo $_SESSION['name'];



        // print_r($_FILES);






        if(isset($_POST['username'])){
            echo "<pre>";
            print_r($_FILES);
            // $tmp = $_FILES['img']['tmp_name'];
            // $file_name = $_FILES['img']['name'];
            // move_uploaded_file($tmp,"upload/".$file_name);
        }








?>

<form action="data.php" method="post" enctype="multipart/form-data">
    <input type="text" name="username">
    <input type="file" name="img[]" multiple>
    <input type="submit">
</form>









