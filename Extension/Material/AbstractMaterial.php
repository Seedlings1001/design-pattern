<?php


namespace DesignPattern\Extension\Material;


use DesignPattern\Structural\Composite\AbstractUnit;

/**
 * 材料抽象类
 *
 * Class AbstractMaterial
 * @package DesignPattern\Extension\Material
 */
abstract class AbstractMaterial extends AbstractUnit
{
    public $attr = [];
}