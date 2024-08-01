<?php

namespace App\Inventory;

use App\Equipable;

class Shovel implements Equipable
{
    private string $image = "shovel.svg";
public function getImage(): string
{
    return 'assets/images/' . $this->image;
}
}