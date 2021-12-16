<?php

namespace App\Interfaces;

use App\Abstracts\SquareAbstract;
use App\Classes\Building;

interface BuildableShape extends ShapeInterface
{

    public function getLeft(): ?SquareAbstract;

    public function getRight(): ?SquareAbstract;

    public function getUp(): ?SquareAbstract;

    public function getDown(): ?SquareAbstract;

    public function setBuildingLeftWall(): void;

    public function setBuildingRightWall(): void;

    public function setBuildingDownWall(): void;

    public function setBuildingUpWall(): void;

    public function getMyBuilding(): ?Building;

    public function isCorner(): bool;

}