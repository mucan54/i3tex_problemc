<?php

namespace App\Interfaces;

interface WallAlgorithm
{
    public function buildWall(BuildableShape $square);
}