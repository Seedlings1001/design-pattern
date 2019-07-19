<?php


namespace DesignPattern\Creational\Weapon;


class Spear extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 5;
    }
}