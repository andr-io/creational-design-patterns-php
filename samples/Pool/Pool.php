<?php

class Horse
{
    public function __construct()
    {

    }

    public function makeSound()
    {

    }
    private function veryExpensiveInitializationStep()
    {

    }
}

class HorsePool
{
    public function __construct()
    {

    }

    public function getHorse(): Horse
    {
        return new Horse();
    }

    public function dispose(Horse $horse): void
    {

    }

    private function cleanUp(Horse $horse)
    {

    }
}

$horse = $horsePool->getHorse();

$horse->makeSound();

$horsePool->dispose($horse);