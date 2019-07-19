<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Creational\Weapon\AbstractWeapon;
use DesignPattern\Creational\Weapon\Sword;

class SwordFactory implements WeaponFactory
{

    public function create(): AbstractWeapon
    {
        return new Sword();
    }
}