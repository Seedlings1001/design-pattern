<?php


namespace DesignPattern\Creational\Builder;


abstract class Map
{
    /**
     * 容器
     *
     * @var array
     */
    private $container;

    /**
     * 载入容器
     *
     * @param string $key
     * @param $item
     */
    public function load(string $key, $item)
    {
        $this->container[$key] = $item;
    }
}