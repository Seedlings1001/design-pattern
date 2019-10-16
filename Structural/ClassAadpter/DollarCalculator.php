<?php


namespace DesignPattern\Structural\ClassAadpter;


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