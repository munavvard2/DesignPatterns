<?php 
include("importer.php");
//if you create new Class of duck please include it in importer.php

$myduck = new MyDuck(); //duck which fly/quack

$myduck->display();
$myduck->performFly();
$myduck->performQuack();

$newDuck = new NewDuck(); // duck which can't fly/quack

$newDuck->display();
$newDuck->performFly();
$newDuck->performQuack();
