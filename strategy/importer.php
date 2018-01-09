<?php
foreach (glob("Behavior/Fly/*.php") as $filename)
{
    $filename.include $filename;
}


foreach (glob("Behavior/Fly/FlyTypes/*.php") as $filename)
{
    $filename.include $filename;
}
foreach (glob("Behavior/Quack/*.php") as $filename)
{
    include $filename;
}


foreach (glob("Behavior/Quack/QuackTypes/*.php") as $filename)
{
    include $filename;
}
