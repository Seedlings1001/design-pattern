<?php


namespace DesignPattern\Extension\Monster;


class BlueSlimeMonster extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(150);
    }
}