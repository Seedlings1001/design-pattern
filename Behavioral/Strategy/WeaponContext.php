<?php


namespace DesignPattern\Behavioral\Strategy;


use DesignPattern\Extension\Weapon\AbstractWeapon;

class WeaponContext
{
    /**
     * @var AbstractWeapon
     */
    private $weapon;

    public function __construct(AbstractWeapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function attack() : ?int
    {
        return $this->weapon->attack();
    }
}