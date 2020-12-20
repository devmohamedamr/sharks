<?php


function isempty($username,$password){
    $emptyerror = [];
    if(empty($username)){
        $emptyerror[] = "username is empty";      
    }
    if(empty($password)){
        $emptyerror[] = "password is empty";      
    }
    return $emptyerror;
}

function vallen($username,$password){
    $valerror = [];
    if(strlen($username) <= 10){
        $valerror[] = "username is not valid";
    }
    if(strlen($password) <=10){
        $valerror[] = "password is not valid";
    }
    return $valerror;
}


// function validation($username,$password){
   
//    $res =  isempty($username,$password); 
//     print_r($res);
//     if(empty($res)){
//      $value = vallen($username,$password);
//      print_r($value);
//     }
// }
