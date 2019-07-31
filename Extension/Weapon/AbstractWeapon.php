<?php


namespace DesignPattern\Extension\Weapon;


abstract class AbstractWeapon
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