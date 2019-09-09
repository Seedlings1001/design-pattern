<?php


namespace DesignPattern\Extension\Monster;


class BlueSlime extends AbstractMonster
{
    public function __construct()
    {
        $this->setBlood(150);
    }
}