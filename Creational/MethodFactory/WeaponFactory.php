<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;

interface WeaponFactory
{
    public function create() : AbstractWeapon;
}