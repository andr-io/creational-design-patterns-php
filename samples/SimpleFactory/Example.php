<?php

class Cat
{
    public function makeSound(): void
    {
        echo "Meow";
    }
}

class CatFactory
{
    public function create(): Cat
    {
        return new Cat();
    }
}
