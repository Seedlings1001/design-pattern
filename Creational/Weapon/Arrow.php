<?php


namespace DesignPattern\Creational\Weapon;


class Arrow extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 10;
    }
}