<?php


namespace DesignPattern\Structural\Facade;


class PaymentSystem
{
    public function payOrder()
    {
        echo "正在进行支付..." . PHP_EOL;
    }
}