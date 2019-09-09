<?php


namespace DesignPattern\Extension\Weapon;


class Sword extends AbstractWeapon
{
    public function __construct()
    {
        $this->setAttackPower(20);
    }
}