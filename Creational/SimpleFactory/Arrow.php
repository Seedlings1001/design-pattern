<?php


namespace DesignPattern\Creational\SimpleFactory;


class Arrow extends AbstractWeapon
{
    public function initPower() : void
    {
        $this->power = 10;
    }
}