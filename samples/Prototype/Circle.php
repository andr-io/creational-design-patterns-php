<?php

class Circle implements Shape
{
    private Point $center;
    private float $radius;

    public function __construct(Point $center, float $radius)
    {
        $this->center = $center;
        $this->radius = $radius;
    }

    public function translate(Point $vector): void
    {
        $this->center->x += $vector->x;
        $this->center->y += $vector->y;
    }

    public function __toString()
    {
        return "Circle with center $this->center and radius $this->radius";
    }

    public function __clone()
    {
        $this->center = clone $this->center;
    }
}