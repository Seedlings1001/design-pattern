<?php


namespace DesignPattern\Extension\Weapon;


use DesignPattern\Structural\Composite\AbstractUnit;

abstract class AbstractWeapon extends AbstractUnit
{
    /**
     * 攻击力
     *
     * @var int
     */
    private $attackPower;

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