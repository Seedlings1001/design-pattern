<?php


namespace DesignPattern\Structural\ClassAdpter;

/**
 * 美元结算
 *
 * Class DollarCalculator
 * @package DesignPattern\Structural\ClassAdpter
 */
class DollarCalculator
{
    /**
     * @var float
     */
    private $doller;

    /**
     * @var float
     */
    private $product;

    /**
     * @var float
     */
    private $service;

    /**
     * @var float
     */
    protected $rate = 1;

    public function requestCalculator(float $product, float $service)
    {
        $this->product = $product;
        $this->service = $service;
        $this->doller = bcadd($product, $service, 2);
        return $this->requestTotal();
    }

    public function requestTotal()
    {
        return bcmul($this->doller, $this->rate, 2);
    }
}