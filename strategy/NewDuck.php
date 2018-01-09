<?php

class NewDuck extends Duck{
    function __construct(){
        $this->flyBehavior = new DoNotFly();
        $this->quackBehavior = new DoNotQuack();
    }

    function display(){
        echo "I am NewDuck<br/>";
    }
} 