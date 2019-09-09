<?php


namespace DesignPattern\Extension\Weapon;


use DesignPattern\Structural\Composite\AbstractUnit;

abstract class AbstractWeapon extends AbstractUnit
{
    protected $power;

    public function __construct()
    {
        $this->initPower();
    }

    public function attack() : ?int
    {
        return $this->power;
    }

    abstract function initPower() : void;
}