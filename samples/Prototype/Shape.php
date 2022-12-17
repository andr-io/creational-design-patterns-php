<?php

interface Shape
{
    public function translate(Point $vector): void;
    public function __clone();
}