<?php


namespace DesignPattern\Creational\Builder;

/**
 * 生成器接口 | 创建一张地图
 *
 * Interface Builder
 * @package DesignPattern\Creational\Builder
 */
interface MapBuilder
{
    /**
     * 初始化地图
     *
     * @return mixed
     */
    public function createMap();

    /**
     * 森林
     *
     * @return mixed
     */
    public function setForest();

    /**
     * 河流
     *
     * @return mixed
     */
    public function setRiver();

    /**
     * 山脉
     *
     * @return mixed
     */
    public function setMountain();

    /**
     * 输出地图
     *
     * @return mixed
     */
    public function getMap(): Map;
}