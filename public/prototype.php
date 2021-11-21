<?php

use DesignPatterns\Creational\Prototype\EarthForest;
use DesignPatterns\Creational\Prototype\EarthPlains;
use DesignPatterns\Creational\Prototype\EarthSea;
use DesignPatterns\Creational\Prototype\TerrainFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$factory = new TerrainFactory(
    new EarthSea(-1),
    new EarthPlains(),
    new EarthForest()
);

print_r($factory->getSea());
print_r($factory->getPlains());
print_r($factory->getForest());