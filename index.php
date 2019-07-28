<?php
require 'vendor/autoload.php';

use DesignPattern\Creational\Prototype\WeaponFactory;
use DesignPattern\Creational\Weapon\Sword;
use DesignPattern\Creational\Material\Diamond;

$factory = new WeaponFactory(new Sword, new Diamond);
var_dump($factory);
var_dump($factory->getMaterial());
