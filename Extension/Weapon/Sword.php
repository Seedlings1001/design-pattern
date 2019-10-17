<?php


namespace DesignPattern\Extension\Weapon;

/**
 * 宝剑
 *
 * Class Sword
 * @package DesignPattern\Extension\Weapon
 */
class Sword extends AbstractWeapon
{
    public function __construct()
    {
        $this->setAttackPower(20);
    }
}