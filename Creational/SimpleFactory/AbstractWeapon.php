<?php


namespace DesignPattern\Creational\SimpleFactory;


abstract class AbstractWeapon
{
    protected $power;

    public function __construct()
    {
        $this->initPower();
    }

    public function attack() : void
    {
        return $this->power;
    }

    abstract function initPower() : void;
}