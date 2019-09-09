<?php


namespace DesignPattern\Extension\Monster;


use DesignPattern\Structural\Composite\AbstractUnit;


abstract class AbstractMonster extends AbstractUnit
{
    /**
     * 血量
     *
     * @var int
     */
    private $blood;

    /**
     * @return int
     */
    public function getBlood(): int
    {
        return $this->blood;
    }

    /**
     * @param int $blood
     */
    public function setBlood(int $blood): void
    {
        $this->blood = $blood;
    }
}