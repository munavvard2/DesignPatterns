<?php

abstract class Duck{
    
    public function __construct(){
    
    }

    public abstract function display();
    
    public function performFly(){
        $this->flyBehavior->fly(); // method delegates that will call the fly method of current class object
    }

    public function performQuack(){
        $this->quackBehavior->quack(); // method delegates that will call the quack method of current class object
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior){
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior){
        $this->quackBehavior = $quackBehavior;
    }

    public function swim(){
        echo "Swimming";
    }

} 

?>