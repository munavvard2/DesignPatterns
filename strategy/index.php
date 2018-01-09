<?php 
include("importer.php");
//if you create new Class of duck please include it in importer.php

$myduck = new MyDuck(); //duck which fly/quack

echo "myduck object before change<br/>";
echo "<pre>";
print_r ($myduck);
echo "</pre>";

$myduck->display();

$myduck->performFly();
echo "changing Fly behavior of MyDuck<br/>";
$myduck->setFlyBehavior(new FlyWithRocket());
$myduck->performFly();

$myduck->performQuack();
echo "changing Quack behavior of MyDuck<br/>";
$myduck->setQuackBehavior(new Squack());
$myduck->performQuack();


$newDuck = new NewDuck(); // duck which can't fly/quack

$newDuck->display();
$newDuck->performFly();
$newDuck->performQuack();


echo "myduck object after change";
echo "<pre>";
print_r($myduck);
// print_r($newDuck); 