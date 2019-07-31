<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;
use DesignPattern\Extension\Weapon\Arrow;

class ArrowFactory implements WeaponFactory
{

    public function create(): AbstractWeapon
    {
        return new Arrow();
    }
}