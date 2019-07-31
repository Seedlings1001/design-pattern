<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;
use DesignPattern\Extension\Weapon\Spear;

class SpearFactory implements WeaponFactory
{

    public function create(): AbstractWeapon
    {
        return new Spear();
    }
}