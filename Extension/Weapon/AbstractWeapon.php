<?php


namespace DesignPattern\Extension\Weapon;


use DesignPattern\Structural\Composite\AbstractUnit;

/**
 * 武器抽象类
 *
 * Class AbstractWeapon
 * @package DesignPattern\Extension\Weapon
 */
abstract class AbstractWeapon extends AbstractUnit
{
    /**
     * 攻击力
     *
     * @var int
     */
    private $attackPower = 0;

    /**
     * @return int
     */
    public function getAttackPower(): int
    {
        return $this->attackPower;
    }

    /**
     * @param int $attackPower
     */
    public function setAttackPower(int $attackPower): void
    {
        $this->attackPower = $attackPower;
    }
}