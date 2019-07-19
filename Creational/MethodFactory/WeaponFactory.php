<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Creational\Weapon\AbstractWeapon;

interface WeaponFactory
{
    public function create() : AbstractWeapon;
}