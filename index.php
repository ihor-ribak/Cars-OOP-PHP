<?php

include_once('FeatureInterface.php');
include_once('TransportAbstract.php');
include_once('Auto.php');
include_once('Bus.php');
include_once('SportCar.php');


$auto = new Auto('Audi', '2.5', 'Black', 'Gas', '15 000', '21');
echo "Легковий атомобіль:  ".'<br/>';
echo "Марка - " .$auto->getBrand().'<br/>';
echo "Потужність - " .$auto->getPower().'<br/>';
echo "Колір - " .$auto->getColor().'<br/>';
echo "Тип пального - " .$auto->getTypeFuel().'<br/>';
echo "Ціна - " .$auto->getPrice().'<br/>';
echo "Розмір дисків - " .$auto->getSize().'<br/>';
echo ' <hr/>';

$bus = new Bus('Mercedes Vito', '2.5', 'Red', 'Diesel', '8 000', '8');
echo "Автобус:  ".'<br/>';
echo "Марка - " .$bus->getBrand().'<br/>';
echo "Потужність - " .$bus->getPower().'<br/>';
echo "Колір - " .$bus->getColor().'<br/>';
echo "Тип пального - " .$bus->getTypeFuel().'<br/>';
echo "Ціна - " .$bus->getPrice().'<br/>';
echo "Кількість пасажирів - " .$bus->getPassengers().'<br/>';
echo ' <hr/>';

$sportCar = new SportCar('BMW', '3.5', 'Yellow', 'Gas', '33 000', '3.5');
echo "Спортивний автомобіль:  ".'<br/>';
echo "Марка - " .$sportCar->getBrand().'<br/>';
echo "Потужність - " .$sportCar->getPower().'<br/>';
echo "Колір - " .$sportCar->getColor().'<br/>';
echo "Тип пального - " .$sportCar->getTypeFuel().'<br/>';
echo "Ціна - " .$sportCar->getPrice().'<br/>';
echo "Розгін від 0 до 100 - " .$sportCar->getTime().'<br/>';
echo ' <hr/>';

