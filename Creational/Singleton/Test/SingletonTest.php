<?php


namespace DesignPattern\Creational\Singleton\Test;


use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * @dataProvider addData
     * @param int $a
     * @param int $b
     * @return bool
     */
    public function testEqual(int $a, float $b)
    {
        $this->assertEquals($a, $b);
    }

    public function addData()
    {
        return array(
            array(2,2),array(1,1),array(1,1)
        );
    }
}