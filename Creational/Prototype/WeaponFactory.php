<?php


namespace DesignPattern\Creational\Prototype;


use DesignPattern\Creational\Material\AbstractMaterial;
use DesignPattern\Creational\Weapon\AbstractWeapon;

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

    public function getWeapon()
    {
        return clone $this->weapon;
    }

    public function getMaterial()
    {
        return clone $this->material;
    }
}