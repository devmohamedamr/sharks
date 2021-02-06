<?php



abstract class crudab
{
    abstract public function update();

    abstract public function delete();

    abstract public function select();
}


// $n = new crudab();

// $n->select();