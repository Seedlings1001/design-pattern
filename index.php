<?php
require 'vendor/autoload.php';

use DesignPattern\Structural\Adapter\EuroAdapter;

$EuroAdapter = new EuroAdapter();
var_dump($EuroAdapter->requestCalculator(10, 20));

