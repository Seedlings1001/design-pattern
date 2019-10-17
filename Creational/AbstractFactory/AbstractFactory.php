<?php


namespace DesignPattern\Creational\AbstractFactory;

/**
 * 抽象工厂
 *
 * Class AbstractFactory
 * @package DesignPattern\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * 武器
     *
     * @return mixed
     */
    abstract function createWeapon();

    /**
     * 材料
     *
     * @return mixed
     */
    abstract function createMaterial();
}