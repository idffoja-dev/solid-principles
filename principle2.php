<?php

class Square
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
}

class Triangle
{
    public $base;
    public $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
}

class Parallelogram
{
}

class TotalAreaCalculator
{
    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            if (is_a($shape, 'Square')) {
                $area[] = $shape->width * $shape->height;
            } elseif (is_a($shape, 'Circle')) {
                $area[] = pi() * ($shape->radius * $shape->radius);
            } elseif (is_a($shape, 'Triangle')) {
                $area[] = ($shape->height * $shape->base) / 2;
            }
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
