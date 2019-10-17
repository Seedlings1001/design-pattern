<?php


namespace DesignPattern\Structural\ClassAdpter;


class EuroCalculator
{
    /**
     * @var float
     */
    private $euro;

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
        $this->euro = bcadd($product, $service, 2);
        return $this->requestTotal();
    }

    public function requestTotal()
    {
        return bcmul($this->euro, $this->rate, 2);
    }
}