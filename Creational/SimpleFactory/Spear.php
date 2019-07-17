<?php


namespace DesignPattern\Creational\SimpleFactory;


class Spear extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 5;
    }
}