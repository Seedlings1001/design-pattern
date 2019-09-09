<?php


namespace DesignPattern\Extension\Monster;


class YellowSlimeMonster extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(50);
    }
}