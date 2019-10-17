<?php


namespace DesignPattern\Structural\ClassAdpter;

/**
 * 具体的适配器
 *
 * Class EuroAdapter
 * @package DesignPattern\Structural\ClassAdpter
 */
class EuroAdapter extends EuroCalculator implements Itarget
{
    public function __construct()
    {
        $this->requester();
    }

    /**
     * @return float
     */
    public function requester()
    {
        $this->rate = 0.8;
        return $this->rate;
    }
}