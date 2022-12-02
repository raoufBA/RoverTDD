<?php

use App\Rover\Position;
use App\Rover\Rover;
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{

    public function testRoverInitialPosition()
    {
        $rover = new Rover();
        $this->assertEqualsCanonicalizing(new Position(0, 0), $rover->getPosition());
        $this->assertEquals('East', $rover->getDirection());
    }

    public function testRoverIsForwarded()
    {
        $rover = new Rover();
        $rover->setPosition(new Position(1, 1));
        $rover->setDirection('West');
        $rover->moveForward()
            ->moveForward();
        $this->assertEqualsCanonicalizing(new Position(-1, 1), $rover->getPosition());
    }
}