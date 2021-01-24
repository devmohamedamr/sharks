<?php

$con  =  mysqli_connect("localhost","root","","itsharks");

function select($id = 0){
    $id = ($id > 0) ? "WHERE `id` = ".$id : ''; 
    $result = mysqli_query($GLOBALS['con'] , "SELECT * FROM `todo` $id");
    $num_rows =  mysqli_num_rows($result);
    if($num_rows > 0){
        while($afnan =   mysqli_fetch_assoc($result)){
            $ibrahem[] = $afnan;
        } 
        return $ibrahem;
    }else{
        return false;
    }
}
function insert($task){
    $q = mysqli_query($GLOBALS['con'] , "INSERT INTO `todo`( `task`) VALUES ( '$task' )");
    $affected = mysqli_affected_rows($GLOBALS['con']);
    if($affected > 0 ){
        return true;
    }else{
        return false;
    }
}
function update($task,$id){
    $q = mysqli_query($GLOBALS['con'] , "UPDATE `todo` SET `task`= '$task' WHERE `id` = $id");
    $affected = mysqli_affected_rows($GLOBALS['con']);
    if($affected > 0 ){
        return true;
    }else{
        return false;
    }
}
function delete($id){
    $q = mysqli_query($GLOBALS['con'] , "DELETE FROM `todo` WHERE id = $id");
    $affected = mysqli_affected_rows($GLOBALS['con']);
    if($affected > 0 ){
        return true;
    }else{
        return false;
    }
}