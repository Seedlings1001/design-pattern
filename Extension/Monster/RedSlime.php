<?php


namespace DesignPattern\Extension\Monster;

/**
 * 红色史莱姆
 *
 * Class RedSlime
 * @package DesignPattern\Extension\Monster
 */
class RedSlime extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(100);
    }
}