<?php




class os implements stdos
{
    public $ram;
    public $storage;
    public $processor;

    public function info(){
        echo 'color is : '.$this->color." <br>";
        echo 'ram is : '.$this->ram." <br>";
        echo 'storage is : '.$this->storage." <br>";
        echo 'processor is : '.$this->processor." <br>";
    }



}