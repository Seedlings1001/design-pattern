<?php


namespace DesignPattern\Creational\AbstractFactory;


abstract class AbstractFactory
{
    abstract function createWeapon();

    abstract function createMaterial();
}