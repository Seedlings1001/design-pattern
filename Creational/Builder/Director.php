<?php


namespace DesignPattern\Creational\Builder;

/**
 * 指挥者
 *
 * Class Director
 * @package DesignPattern\Creational\Builder
 */
class Director
{
    /**
     * 指挥建造一个地图
     *
     * @param MapBuilder $builder
     * @return Map
     */
    public function build(MapBuilder $builder): Map
    {
        $builder->createMap();
        $builder->setForest();
        $builder->setRiver();
        $builder->setMountain();

        return $builder->getMap();
    }
}