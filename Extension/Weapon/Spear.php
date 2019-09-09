<?php


namespace DesignPattern\Extension\Weapon;


class Spear extends AbstractWeapon
{
    public function __construct()
    {
        $this->setAttackPower(10);
    }
}