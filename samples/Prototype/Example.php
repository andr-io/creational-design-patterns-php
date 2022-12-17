<?php

spl_autoload_register(function ($class_name) {
    include $class_name.".php";
});

$circle = new Circle(new Point(1, 1), 10);
$rectangle = new Rectangle(new Point(2, 2), new Point(3, 3));

$copyOfCircle = clone $circle;
$copyOfRectangle = clone $rectangle;


$copyOfCircle->translate(new Point(10, 10));
$copyOfRectangle->translate(new Point(20, 20));

echo $circle."\n";
echo $copyOfCircle."\n";

echo $rectangle."\n";
echo $copyOfRectangle."\n";