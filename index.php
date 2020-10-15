<?php

require_once 'Truck.php';

$kamtar = new Truck("black", 2, "fuel", 500);
echo $kamtar->isFull () . '<br>';
$kamtar->setload (500);
echo $kamtar->isFull () . '<br>';
$kamtar->setload (501);
echo $kamtar->isFull () . '<br>';
echo $kamtar->forward ();
echo $kamtar->forward ();
echo $kamtar->forward ();

