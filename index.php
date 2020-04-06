<?php

require_once 'truck.php';

var_dump(Truck::ALLOWED_ENERGIES);


$truck = new Truck('black', 3, 'fuel', 500);
var_dump($truck);
echo $truck->forward();
echo $truck->brake();
$truck->setLoad(350);
var_dump($truck);
echo $truck->isFull();

$truck2 = new Truck('blue', 2, 'electric', 500);
var_dump($truck2);
echo $truck2->forward();
echo $truck2->brake();
$truck2->setLoad(500);
var_dump($truck2);
echo $truck2->isFull();
