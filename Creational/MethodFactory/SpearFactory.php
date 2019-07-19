<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Creational\Weapon\AbstractWeapon;
use DesignPattern\Creational\Weapon\Spear;

class SpearFactory implements WeaponFactory
{

    public function create(): AbstractWeapon
    {
        return new Spear();
    }
}