<?php

class MyDuck extends Duck{
    function __construct(){
        $this->flyBehavior = new FlyWthWings();
        $this->quackBehavior = new Quack();
    }

    function display(){
        echo "I am MyDuck<br/>";
    }
} 