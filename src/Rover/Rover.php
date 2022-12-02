<?php

namespace App\Rover;

class Rover
{

    const DIRECTIONNORTH = 'North';
    const DIRECTIONEAST = 'East';
    const DIRECTIONSOUTH = 'South';
    const DIRECTIONWEST = 'West';


    private string $direction;
    private Position $position;
    private array $translations;

    public function __construct()
    {
        $this->position = new Position(0, 0);
        $this->direction = self::DIRECTIONEAST;

        $this->translations = [
            self::DIRECTIONEAST => new Vector(1, 0),
            self::DIRECTIONSOUTH => new Vector(0, -1),
            self::DIRECTIONWEST => new Vector(-1, 0),
            self::DIRECTIONNORTH => new Vector(0, 1)
        ];
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     * @return Rover
     */
    public function setDirection(string $direction): Rover
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return $this
     */
    public function moveForward(): Rover
    {
        $this->position->translateByVector($this->translations[$this->direction]);

        return $this;
    }

    /**
     * @return Position
     */
    public function getPosition(): Position
    {
        return $this->position;
    }

    /**
     * @param Position $position
     * @return Rover
     */
    public function setPosition(Position $position): Rover
    {
        $this->position = $position;

        return $this;
    }
}