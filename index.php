<?php

require 'vendor/autoload.php';

use Decorator\BasicInspection;
use Decorator\TireRotation;

$service_1 = new BasicInspection();

echo $service_1->getDescription(); // Basic inspection
echo $service_1->getCost(); // 25

$service_2 = new TireRotation(new BasicInspection);

echo $service_2->getDescription(); // Basic inspection and oil change cost
echo $service_2->getCost(); // 75