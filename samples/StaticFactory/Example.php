<?php

interface Animal
{
    public function makeSound(): void;
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

final class StaticFactory
{
    public static function create(string $type): Animal
    {
        return match ($type)
        {
            'cat' => new Cat(),
            'horse' => new Horse(),
            default => throw new InvalidArgumentException("Unknown type"),
        };
    }

    private function __construct()
    {
        // Empty
    }
}

