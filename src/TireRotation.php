<?php

namespace Decorator;

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