<?php

namespace App\Traits;

use App\Abstracts\SquareAbstract;
use App\Classes\Building;

/**
 * Converts attached object to buildable one.
 */
trait Buildable
{
    /**
     * @var \App\Classes\Building|mixed|null
     */
    private ?Building $myBuilding;

    /**
     * Return square's building
     *
     * @return \App\Classes\Building|mixed|null
     */
    public function getMyBuilding(): ?Building
    {
        return $this->myBuilding;
    }

    /**
     * @return SquareAbstract|null
     */
    public function getLeft(): ?SquareAbstract
    {
        return $this->myBuilding->getSquare($this->getX() - 1, $this->getY()) ?? null;
    }

    /**
     * @return SquareAbstract|null
     */
    public function getRight(): ?SquareAbstract
    {
        return $this->myBuilding->getSquare($this->getX() + 1, $this->getY()) ?? null;
    }

    /**
     * @return SquareAbstract|null
     */
    public function getUp(): ?SquareAbstract
    {
        return $this->myBuilding->getSquare($this->getX(), $this->getY() + 1) ?? null;
    }

    /**
     * @return SquareAbstract|null
     */
    public function getDown(): ?SquareAbstract
    {
        return $this->myBuilding->getSquare($this->getX(), $this->getY() - 1) ?? null;
    }

    /**
     * @retunn void
     */
    public function setBuildingLeftWall(): void
    {
        $this->setLeftWall();
        if($this->getLeft())
        $this->getLeft()->setRightWall();
    }

    /**
     * @retunn void
     */
    public function setBuildingRightWall(): void
    {
        $this->setRightWall();
        if($this->getRight())
        $this->getRight()->setLeftWall();
    }

    /**
     * @retunn void
     */
    public function setBuildingDownWall(): void
    {
        $this->setDownWall();
        if($this->getDown())
        $this->getDown()->setUpWall();
    }

    /**
     * @retunn void
     */
    public function setBuildingUpWall(): void
    {

    }

}