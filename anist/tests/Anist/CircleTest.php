<?php

use PHPUnit\Framework\TestCase;
use Anist\Circle;

class CircleTest extends TestCase
{
    public function testCircumference()
    {
        $radius = 1.5;
        $subject = new Circle($radius);

        $this->assertEquals(
            (2 * pi() * 1.5),
            $subject->getCircumference()
        );
    }

    public function testArea()
    {
        $radius = 1.5;
        $subject = new Circle($radius);

        $this->assertEquals((pi() * $radius * $radius), $subject->getArea());
    }
}
