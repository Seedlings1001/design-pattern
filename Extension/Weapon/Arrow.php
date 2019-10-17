<?php


namespace DesignPattern\Extension\Weapon;

/**
 * 弓箭
 *
 * Class Arrow
 * @package DesignPattern\Extension\Weapon
 */
class Arrow extends AbstractWeapon
{
    public function __construct()
    {
        $this->setAttackPower(15);
    }
}