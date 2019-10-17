<?php


namespace DesignPattern\Creational\Builder;

/**
 * 物产丰富的地图
 *
 * Class RichMapBuilder
 * @package DesignPattern\Creational\Builder
 */
class RichMapBuilder implements MapBuilder
{

    /**
     * @var RichMap
     */
    private $richMap;

    /**
     * 森林
     *
     * @return mixed
     */
    public function setForest()
    {
        $this->richMap->load('雪山松树林', new Forest());
        $this->richMap->load('热带红树林', new Forest());
    }

    /**
     * 河流
     *
     * @return mixed
     */
    public function setRiver()
    {
        $this->richMap->load('长江', new River());
        $this->richMap->load('黄河', new River());
    }

    /**
     * 山脉
     *
     * @return mixed
     */
    public function setMountain()
    {
        $this->richMap->load('华山', new Mountain());
        $this->richMap->load('黄山', new Mountain());
        $this->richMap->load('泰山', new Mountain());
    }

    public function createMap()
    {
        $this->richMap = new RichMap();
    }

    /**
     * 输出地图
     *
     * @return mixed
     */
    public function getMap(): Map
    {
        return $this->richMap;
    }
}