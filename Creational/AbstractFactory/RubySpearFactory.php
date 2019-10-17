<?php


namespace DesignPattern\Creational\AbstractFactory;


use DesignPattern\Extension\Material\Ruby;
use DesignPattern\Extension\Weapon\Spear;

/**
 * 红宝石长矛
 *
 * Class RubySpearFactory
 * @package DesignPattern\Creational\AbstractFactory
 */
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