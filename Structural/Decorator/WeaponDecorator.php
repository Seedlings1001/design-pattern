<?php


namespace DesignPattern\Structural\Decorator;


use DesignPattern\Extension\Weapon\AbstractWeapon;

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

    public function setAttackPower()
    {
        return $this->setWeapon($this->weapon->getAttackPower() + 10);
    }
}