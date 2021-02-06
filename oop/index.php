<?php

class user
{

    public $server;
    public $user;
    public $pass;
    public $database;

    private function con(){
      return  mysqli_connect($this->server,$this->user,$this->pass,$this->database);
    }

    public function add($task){
        mysqli_query($this->con(),"INSERT INTO `todo`( `task`) VALUES ( '$task' )");
        $affected = mysqli_affected_rows($this->con());
        if($affected > 0 ){
            return true;
        }else{
            return false;
        }

    }
    public function delete($id){
        mysqli_query($this->con(),"DELETE FROM `todo` WHERE id = $id");
        $affected = mysqli_affected_rows($this->con());
        if($affected > 0 ){
            return true;
        }else{
            return false;
        }

    }
    public function update($task,$id){
        mysqli_query($this->con(),"UPDATE `todo` SET `task`= '$task' WHERE `id` = $id");
        $affected = mysqli_affected_rows($this->con());
        if($affected > 0 ){
            return true;
        }else{
            return false;
        }
    
    }
    public function select(){
        $result = mysqli_query($this->con(),"SELECT * FROM `todo`");
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
}


// $u = new user();
// $u->database = "itsharks";
// $u->user = "root";
// $u->pass = "";
// $u->server = "localhost";
// $data = $u->select();
// print_r($data);
// echo "<br>";


// $m = new user();
// $m->database = "itshark2";
// $m->user = "root";
// $m->pass = "";
// $m->server = "localhost";
// $data = $m->select();
// print_r($data);
// // $u->con();



require "hp.php";

$hp = new hp();























