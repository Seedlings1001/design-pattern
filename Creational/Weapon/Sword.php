<?php


namespace DesignPattern\Creational\Weapon;


class Sword extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 20;
    }
}