<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Creational\Weapon\AbstractWeapon;
use DesignPattern\Creational\Weapon\Arrow;

class ArrowFactory implements WeaponFactory
{

    public function create(): AbstractWeapon
    {
        return new Arrow();
    }
}