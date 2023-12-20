<?php

namespace Decorator;

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