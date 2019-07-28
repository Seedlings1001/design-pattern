<?php


namespace DesignPattern\Creational\AbstractFactory;


use DesignPattern\Creational\Material\Ruby;
use DesignPattern\Creational\Weapon\Spear;

class RubySpearFactory extends AbstractFactory
{

    public function createWeapon()
    {
        return new Spear();
    }

    public function createMaterial()
    {
        return new Ruby();
    }
}