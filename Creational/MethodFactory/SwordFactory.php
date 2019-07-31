<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;
use DesignPattern\Extension\Weapon\Sword;

class SwordFactory implements WeaponFactory
{

    public function create(): AbstractWeapon
    {
        return new Sword();
    }
}