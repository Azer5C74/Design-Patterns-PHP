<?php


interface CarService
{
    public function getCost();

    public function getDescription();

}

class BasicInspection implements CarService
{

    public function getCost(): int
    {
        return 25;
    }

    public function getDescription(): string
    {
        return ' Basic inspection. ';
    }
}


class OilChange implements CarService
{
    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return $this->carService->getCost() + 15;
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and oil change costs. ';
    }
}

class TireRotation implements CarService
{
    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): int
    {
        return $this->carService->getCost() + 50;
    }

    public function getDescription(): string
    {
        return $this->carService->getDescription() . ', and TireRotation costs. ';
    }
}

// put it into action

$service_1 = new BasicInspection();

echo $service_1->getDescription(); // Basic inspection
echo $service_1->getCost(); // 25

$service_2 = new TireRotation(new BasicInspection);

echo $service_2->getDescription(); // Basic inspection and oil change cost
echo $service_2->getCost(); // 75