<?php


namespace DesignPattern\Structural\Facade;


class Facade
{
    /**
     * @var ProductSystem
     */
    private $productLogic;

    /**
     * @var OrderSystem
     */
    private $orderLogic;

    /**
     * @var PaymentSystem
     */
    private $paymentLogic;

    public function __construct()
    {
        $this->productLogic = new ProductSystem();
        $this->orderLogic = new OrderSystem();
        $this->paymentLogic = new PaymentSystem();
    }

    public function Buy()
    {
        $this->productLogic->calcPrice();
        $this->orderLogic->createOrder();
        $this->paymentLogic->payOrder();
    }
}

