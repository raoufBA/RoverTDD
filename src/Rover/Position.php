<?php

namespace App\Rover;
class Position
{
    private int $x;
    private int $y;

    /**
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param Vector $vector
     * @return void
     */
    public function translateByVector(Vector $vector): void
    {
        $this->translate($vector->getX(), $vector->getY());
    }

    /**
     * @param int $x
     * @param int $y
     * @return void
     */
    public function translate(int $x, int $y): void
    {
        $this->setX($this->x + $x);
        $this->setY($this->y + $y);
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     * @return Position
     */
    public function setX(int $x): Position
    {
        $this->x = $x;

        return $this;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     * @return Position
     */
    public function setY(int $y): Position
    {
        $this->y = $y;

        return $this;
    }


}