<?php


namespace DesignPattern\Structural\Composite;


class MaterialLibrary extends AbstractUnit
{
    /**
     * 是否是组合对象
     *
     * @return null
     */
    public function getComposite()
    {
        return $this;
    }
}