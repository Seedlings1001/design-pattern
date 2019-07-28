<?php


namespace DesignPattern\Creational\AbstractFactory;


use DesignPattern\Creational\Material\Gold;
use DesignPattern\Creational\Weapon\Sword;

class GoldSwordFactory extends AbstractFactory
{

    public function createWeapon()
    {
        return new Sword();
    }

    public function createMaterial()
    {
        return new Gold();
    }
}