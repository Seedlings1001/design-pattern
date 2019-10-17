<?php


namespace DesignPattern\Creational\Prototype;



use DesignPattern\Extension\Material\AbstractMaterial;
use DesignPattern\Extension\Weapon\AbstractWeapon;

class WeaponFactory
{
    /**
     * @var AbstractWeapon
     */
    protected $weapon;

    /**
     * @var AbstractMaterial
     */
    protected $material;

    public function __construct(AbstractWeapon $weapon, AbstractMaterial $material)
    {
        $this->weapon = $weapon;
        $this->material = $material;
    }

    /**
     * 武器原型
     *
     * @return AbstractWeapon
     */
    public function getWeapon()
    {
        return clone $this->weapon;
    }

    /**
     * 材料原型
     *
     * @return AbstractMaterial
     */
    public function getMaterial()
    {
        return clone $this->material;
    }
}