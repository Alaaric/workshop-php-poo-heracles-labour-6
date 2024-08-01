<?php

namespace App\Fighter;

use App\Equipable;
use App\Inventory\Shield;
use App\Inventory\Weapon;
use App\Inventory\Shovel;

use App\Movable;

class Hero extends Fighter implements Movable
{
    protected int $strength = 20;
    protected int $dexterity = 6;
    protected string $image = 'heracles.svg';
    private ?Equipable $secondHand = null;
    private ?Weapon $weapon = null;
    private ?Shield $shield = null;

    public function getDamage(): int
    {
        $damage = $this->getStrength();
        if ($this->getWeapon() !== null) {
            $damage += $this->getWeapon()->getDamage();
        }
        return $damage;
    }

    /**
     * Get the value of weapon
     */
    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     */
    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function getDefense(): int
    {
        $defense = $this->getDexterity();
        if ($this->getShield() !== null) {
            $defense += $this->getShield()->getProtection();
        }

        return $defense;
    }

    /**
     * Get the value of shield
     */
    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     */
    public function setShield(?Shield $shield): void
    {
        $this->shield = $shield;
    }

    public function getSecondHand(): ?Equipable
    {
        return $this->secondHand;
    }

    public function setSecondHand(Equipable $equipable): void
    {
         $this->secondHand = $equipable;

    }

    /**
     * Get the value of range
     */
    public function getRange(): float
    {
        $range = $this->range;
        if ($this->getWeapon() instanceof Weapon) {
            $range += $this->getWeapon()->getRange();
        }

        return $range;
    }
}
