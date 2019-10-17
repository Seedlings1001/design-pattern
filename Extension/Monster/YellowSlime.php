<?php


namespace DesignPattern\Extension\Monster;

/**
 * 黄色史莱姆
 *
 * Class YellowSlime
 * @package DesignPattern\Extension\Monster
 */
class YellowSlime extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(50);
    }
}