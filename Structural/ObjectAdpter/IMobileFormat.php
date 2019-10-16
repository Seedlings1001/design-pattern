<?php


namespace DesignPattern\Structural\ObjectAdpter;


interface IMobileFormat
{
    public function formatCss();

    public function formatGraphics();

    public function verticalLayout();
}