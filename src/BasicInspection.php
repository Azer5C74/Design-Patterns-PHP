<?php

namespace Decorator;
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