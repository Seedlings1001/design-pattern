<?php


namespace DesignPattern\Structural\Decorator;


use DesignPattern\Extension\Weapon\AbstractWeapon;

/**
 * 武器装饰器
 *
 * Class WeaponDecorator
 * @package DesignPattern\Structural\Decorator
 */
class WeaponDecorator
{
    /**
     * 武器
     *
     * @var AbstractWeapon
     */
    private $weapon;

    public function __construct(AbstractWeapon $weapon)
    {
        $this->setWeapon($weapon);
    }

    /**
     * @return AbstractWeapon
     */
    public function getWeapon(): AbstractWeapon
    {
        return $this->weapon;
    }

    /**
     * @param AbstractWeapon $weapon
     */
    public function setWeapon(AbstractWeapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    /**
     * 装饰器
     */
    public function setAttackPower()
    {
        $this->weapon->setAttackPower($this->weapon->getAttackPower() + 10);
    }
}