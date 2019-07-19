<?php
require 'vendor/autoload.php';

use DesignPattern\Creational\MethodFactory\SwordFactory;
use DesignPattern\Creational\SimpleFactory\WeaponFactory;
use DesignPattern\Creational\Weapon\WeaponConstant;

//
//spl_autoload_register(function ($class) {
//    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
//    if (file_exists($file)) {
//        require $file;
//        return true;
//    }
//    return false;
//});
//
var_dump(WeaponFactory::create(WeaponConstant::SPEAR));
$sword = new SwordFactory();
var_dump($sword->create());