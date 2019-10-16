<?php


namespace DesignPattern\Structural\ClassAadpter;


class EuroAdapter extends EuroCalculator implements Itarget
{
    public function __construct()
    {
        $this->requester();
    }

    public function requester()
    {
        $this->rate = 0.8;
        return $this->rate;
    }
}