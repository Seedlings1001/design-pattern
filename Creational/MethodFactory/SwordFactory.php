<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;
use DesignPattern\Extension\Weapon\Sword;

/**
 * 宝剑
 *
 * Class SwordFactory
 * @package DesignPattern\Creational\MethodFactory
 */
class SwordFactory implements WeaponFactory
{

    /**
     * 创造武器
     *
     * @return AbstractWeapon
     */
    public function create(): AbstractWeapon
    {
        return new Sword();
    }
}