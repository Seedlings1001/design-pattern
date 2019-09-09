<?php


namespace DesignPattern\Extension\Weapon;


class Arrow extends AbstractWeapon
{
    public function __construct()
    {
        $this->setAttackPower(15);
    }
}