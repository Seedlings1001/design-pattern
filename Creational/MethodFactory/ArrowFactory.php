<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;
use DesignPattern\Extension\Weapon\Arrow;

/**
 * 弓箭
 *
 * Class ArrowFactory
 * @package DesignPattern\Creational\MethodFactory
 */
class ArrowFactory implements WeaponFactory
{

    /**
     * 创造武器
     *
     * @return AbstractWeapon
     */
    public function create(): AbstractWeapon
    {
        return new Arrow();
    }
}