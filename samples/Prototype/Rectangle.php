<?php

class Rectangle implements Shape
{
    private Point $upperLeft;
    private Point $lowerRight;

    public function __construct(Point $upperLeft, Point $lowerRight)
    {
        $this->upperLeft = $upperLeft;
        $this->lowerRight = $lowerRight;
    }

    public function translate(Point $vector): void
    {
        $this->upperLeft->x += $vector->x;
        $this->upperLeft->y += $vector->y;

        $this->lowerRight->x += $vector->x;
        $this->lowerRight->y += $vector->y;
    }

    public function __toString()
    {
        return "Rectangle with upper left corner at $this->upperLeft and lower right corner at $this->lowerRight";
    }

    public function __clone()
    {
        $this->upperLeft = clone $this->upperLeft;
        $this->lowerRight = clone $this->lowerRight;
    }
}