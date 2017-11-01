<?php

use Model;

$someCar = new Car();
$someCar->setCarBrand('Volvo');

$driver = new Driver();
$driver->setName('Mark');
$driver->setLicense('DF1508');
$driver->setNumberCar('ca4239mi');
$driver->setCar($someCar);

$client = new Client();
$client->setName('Derek');
$client->setFirstName('Poznak');

$order = new Order();
$order-> setDate('26.10.17');
$order-> setDriver($driver);
$order-> setClient($client);


echo $order->getDriver()->getCar()->getCarBrand();
