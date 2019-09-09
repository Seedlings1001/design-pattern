<?php


namespace DesignPattern\Extension\Monster;


class YellowSlime extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(50);
    }
}