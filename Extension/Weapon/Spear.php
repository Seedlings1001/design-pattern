<?php


namespace DesignPattern\Extension\Weapon;


class Spear extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 5;
    }
}