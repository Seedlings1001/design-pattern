<?php


namespace DesignPattern\Extension\Monster;


class RedSlimeMonster extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(100);
    }
}