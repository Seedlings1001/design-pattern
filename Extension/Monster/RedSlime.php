<?php


namespace DesignPattern\Extension\Monster;


class RedSlime extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(100);
    }
}