<?php
require "crudstd.php";
require "in.php";

// const S = "wadwad";
// echo S;

class crud  
{
    private $password;

    const M = 'ww';

    public function setpassword($p){
        $hash = md5($p);
        $this->password = $hash;
    }

    public function getpassword(){
        // return $this->password;
        // self::test();
        echo self::M;   
    }


    static function test(){
        echo "test";
    }



}




// crud::test();