<?php

abstract class Builder
{
    public function createBase() {}
    public function addWheels() {}
    public function addEngine() {}
    public function addSeats() {}
    public function addBrakes() {}

}

class Bicycle
{
    public string $wheels;
    public string $seats;
    public string $brakes;
}

class Car
{
    public string $wheels;
    public string $engine;
    public string $brakes;
    public string $seats;
}

class CarBuilder extends Builder
{
    public function createBase() {}
    public function addWheels() {}
    public function addEngine() {}
    public function addSeats() {}
    public function addBrakes() {}
    public function get() {}
}

class BicycleBuilder extends Builder
{
    public function createBase() {}
    public function addWheels() {}
    public function addSeats() {}
    public function addBrakes() {}
    public function get() {}
}

class Director
{
    public function build(Builder $builder): void
    {
        $builder->createBase();
        $builder->addSeats();
        $builder->addWheels();
        $builder->addBrakes();
        $builder->addEngine();
    }
}