<?php

//Vehicles
require_once 'Bicycle.php';
require_once 'ElectricBike.php';
require_once 'StakeBoard.php';
require_once 'Car.php';
require_once 'ElectricCar.php';
require_once 'Truck.php';

//HighWay
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

//Create Vehicle
$lisa = new Bicycle('red',1, 2);
$maggie = new Bicycle('blue',1, 2);
$homer = new Car('pink',5, 'fuel');
$marge = new Car('white',5, 'fuel');
$bart = new StakeBoard('black');
$milhouse = new Truck('yellow', 2, 4, 100);

//Create HighWay
$autoroute = new MotorWay();
$rocade = new MotorWay();
$rue = new ResidentialWay();
$allee = new ResidentialWay();
$chemin = new PedestrianWay();
$champs = new PedestrianWay();


echo 'mise en vitesse de Lisa qui est en vélo<br>';
$lisa->setCurrentSpeed(25);
$homer->switchOn();
echo 'Allumage des phares : '.$lisa->switchOn().'<br>';
//$bart->switchOn();
var_dump($homer);
var_dump($lisa);
echo 'extinction des phares de Lisa<br>';
echo $lisa->switchOff();
echo 'arrêt de Lisa<br>';
$lisa->setCurrentSpeed(0);
echo 'Allumage des phares de Lisa : '.$lisa->switchOn();
var_dump($lisa);
