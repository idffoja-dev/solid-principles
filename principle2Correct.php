<?php

interface ShapeInterface
{
    public function area();
}

class Square implements ShapeInterface
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * ($this->radius * $this->radius);
    }
}

class Triangle implements ShapeInterface
{
    public $base;
    public $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area()
    {
        return ($this->height * $this->base) / 2;
    }
}

class TotalAreaCalculator
{
    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

$shapes = [
    new Square(12, 12),
    new Circle(12),
    new Triangle(12, 12),
];

$totalAreaCalculator = new TotalAreaCalculator();
echo $totalAreaCalculator->calculate($shapes);
