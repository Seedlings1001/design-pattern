<?php


namespace DesignPattern\Structural\Facade;


class Facade
{
    /**
     * @var ProductSystem
     */
    private $productSystem;

    /**
     * @var OrderSystem
     */
    private $orderSystem;

    /**
     * @var PaymentSystem
     */
    private $paymentSystem;

    public function __construct()
    {
        $this->productSystem = new ProductSystem();
        $this->orderSystem = new OrderSystem();
        $this->paymentSystem = new PaymentSystem();
    }

    public function Buy()
    {
        $this->productSystem->calcPrice();
        $this->orderSystem->createOrder();
        $this->paymentSystem->payOrder();
    }
}

