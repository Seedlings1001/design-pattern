<?php


namespace DesignPattern\Structural\ObjectAdpter;


class MobileAdpter implements IFormat
{
    /**
     * @var IMobileFormat
     */
    private $mobile;

    public function __construct(IMobileFormat $IMobileFormat)
    {
        $this->mobile = $IMobileFormat;
    }

    public function formatCss()
    {
        return $this->mobile->formatCss();
    }

    public function formatGraphics()
    {
        return $this->mobile->formatGraphics();
    }

    public function horizontalLayout()
    {
        return $this->mobile->verticalLayout();
    }
}