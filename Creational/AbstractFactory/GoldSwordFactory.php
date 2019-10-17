<?php


namespace DesignPattern\Creational\AbstractFactory;


use DesignPattern\Extension\Material\Gold;
use DesignPattern\Extension\Weapon\Sword;

/**
 * 镀金的宝剑
 *
 * Class GoldSwordFactory
 * @package DesignPattern\Creational\AbstractFactory
 */
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