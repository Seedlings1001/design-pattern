<?php


namespace DesignPattern\Structural\Facade;


class OrderSystem
{
    public function createOrder()
    {
        echo "正在创建订单..." . PHP_EOL;
    }
}