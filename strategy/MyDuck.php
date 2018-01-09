<?php
include("Duck.php");
include("importer.php");


class MyDuck extends Duck{
    function __construct(){
        $this->flyBehavior = new FlyWthWings();
        $this->quackBehavior = new Quack();
    }

    function display(){
        echo "I am MyDuck";
    }
}