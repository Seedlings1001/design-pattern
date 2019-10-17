<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;
use DesignPattern\Extension\Weapon\Spear;

/**
 * 长矛
 *
 * Class SpearFactory
 * @package DesignPattern\Creational\MethodFactory
 */
class SpearFactory implements WeaponFactory
{

    /**
     * 创造武器
     *
     * @return AbstractWeapon
     */
    public function create(): AbstractWeapon
    {
        return new Spear();
    }
}