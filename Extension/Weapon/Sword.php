<?php


namespace DesignPattern\Extension\Weapon;


class Sword extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 20;
    }
}