<?php

namespace Anist;

class Circle
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getCircumference()
    {
        return (2 * pi() * $this->radius);
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}
