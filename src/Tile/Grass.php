<?php

namespace App\Tile;

class Grass extends Tile
{
    protected string $image = 'grass.png';
    private bool $digged  = false;

    public function isDigged(): bool {
        return $this->digged;
    }

    public function dig(): void
    {
        $this->digged = true;
        $this->setImage("hole.png");
    }
}