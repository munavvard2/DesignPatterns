<?php

    abstract class Duck{
        
        public $flyBehavior; // Object of FlyBehavour i.e.: super type
        
        public $quackBehavior; // Object of QuackBehavour i.e.: super type
        
        public function __construct(){
            $flyBehavior = $this->flyBehavior;
            $quackBehavior = $this->quackBehavior;
        }

        public abstract function display();
        
        public function performFly(){
            $this->flyBehavior->fly(); // method delegates that will call the fly method of current class object
        }

        public function performQuack(){
            $this->quackBehavior->quack(); // method delegates that will call the quack method of current class object
        }

        public function swim(){
            echo "Swimming";
        }

    }

?>