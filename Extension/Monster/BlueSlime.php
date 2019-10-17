<?php


namespace DesignPattern\Extension\Monster;

/**
 * 蓝色史莱姆
 *
 * Class BlueSlime
 * @package DesignPattern\Extension\Monster
 */
class BlueSlime extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(150);
    }
}