<?php


namespace DesignPattern\Structural\Composite;


use DesignPattern\Behavioral\Visitor\AbstractVisitor;

abstract class AbstractUnit
{
    /**
     * @var array
     */
    protected $units = array();

    /**
     * 是否是组合对象
     *
     * @return null
     */
    public function getComposite(){
        return null;
    }

    /**
     * 添加标准单位
     *
     * @param AbstractUnit $unit
     */
    public function addUnit(AbstractUnit $unit)
    {
        if (!is_null($this->getComposite())) {
            array_push( $this->units, $unit);
        }
    }

    /**
     * 移除标准单位
     *
     * @param AbstractUnit $unit
     */
    public function removeUnit(AbstractUnit $unit)
    {
        $this->units = array_udiff($this->units, array($unit), function($a, $b) {
            return ($a === $b) ? 0 : 1;
        });
    }

    /**
     * 访问者
     *
     * @param AbstractVisitor $visitor
     */
    public function accept(AbstractVisitor $visitor)
    {
        $method = "visit" . self::class;
        $visitor->{$method}($this);
    }
}