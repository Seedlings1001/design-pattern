<?php


namespace DesignPattern\Creational\Builder;

/**
 * 资源贫瘠的地图
 *
 * Class BarrenMapBuilder
 * @package DesignPattern\Creational\Builder
 */
class BarrenMapBuilder implements MapBuilder
{
    /**
     * @var BarrenMap
     */
    private $barrenMap;

    /**
     * 森林
     *
     * @return mixed
     */
    public function setForest()
    {
        $this->barrenMap->load('小树林', new Forest());
    }

    /**
     * 河流
     *
     * @return mixed
     */
    public function setRiver()
    {
        $this->barrenMap->load('小溪', new River());
    }

    /**
     * 山脉
     *
     * @return mixed
     */
    public function setMountain()
    {
        $this->barrenMap->load('小山丘', new Mountain());
    }

    public function createMap()
    {
        $this->barrenMap = new BarrenMap();
    }

    /**
     * 输出地图
     *
     * @return mixed
     */
    public function getMap(): Map
    {
        return $this->barrenMap;
    }
}