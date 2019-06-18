<?php

namespace SimpleFactory;

use SimpleFactory\Sword;

/**
 * 武器工厂
 * Class SimpleFactory
 */
class SimpleFactory{

    public static function create(string $weaponName)
    {
//        spl_autoload_register(function ($weaponName) {
//            require_once str_replace('\\', DIRECTORY_SEPARATOR, $weaponName) . '.php';
//        });
        return new $weaponName;
    }
}

