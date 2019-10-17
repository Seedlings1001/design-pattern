<?php


namespace DesignPattern\Extension\Weapon;

/**
 * 长矛
 *
 * Class Spear
 * @package DesignPattern\Extension\Weapon
 */
class Spear extends AbstractWeapon
{
    public function __construct()
    {
        $this->setAttackPower(10);
    }
}