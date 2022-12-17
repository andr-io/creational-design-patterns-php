<?php

interface Animal
{
    public function makeSound(): void;
}


interface AnimalFactory
{
    public function create(): Animal;
}

class Cat implements Animal
{
    public function makeSound(): void
    {
        echo "Meow";
    }
}

class Horse implements Animal
{
    public function makeSound(): void
    {
        echo "EEEEEEEEEEEEEEEEEeeeeeeeeeeeeeeeeee";
    }
}

class CatFactory implements AnimalFactory
{
    public function create(): Animal
    {
        return new Cat();
    }
}

class HorseFactory implements AnimalFactory
{
    public function create(): Animal
    {
        return new Horse();
    }
}