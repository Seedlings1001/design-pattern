<?php


namespace DesignPattern\Creational\SimpleFactory;


class Sword extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 20;
    }
}