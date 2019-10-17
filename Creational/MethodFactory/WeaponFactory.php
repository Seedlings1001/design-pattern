<?php


namespace DesignPattern\Creational\MethodFactory;


use DesignPattern\Extension\Weapon\AbstractWeapon;

/**
 * 武器接口
 *
 * Interface WeaponFactory
 * @package DesignPattern\Creational\MethodFactory
 */
interface WeaponFactory
{
    /**
     * 创造武器
     *
     * @return AbstractWeapon
     */
    public function create() : AbstractWeapon;
}