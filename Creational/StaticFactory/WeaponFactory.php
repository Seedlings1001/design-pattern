<?php


namespace DesignPattern\Creational\SimpleFactory;


use DesignPattern\Creational\Weapon\AbstractWeapon;
use DesignPattern\Creational\Weapon\WeaponConstant;

class WeaponFactory
{
    public static function create(int $weaponConstant) : ?AbstractWeapon
    {
        switch ($weaponConstant) {
            case WeaponConstant::SWORD :
                $className = 'Sword';
                break;
            case WeaponConstant::ARROW :
                $className = 'Arrow';
                break;
            case WeaponConstant::SPEAR :
                $className = 'Spear';
                break;
            default:
                $className = null;
                break;
        }
        $class = 'DesignPattern\\Creational\\Weapon\\' . $className;
        return class_exists($class) ? new $class : null;
    }
}