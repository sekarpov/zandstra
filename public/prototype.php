<?php

use DesignPatterns\Prototype\EarthForest;
use DesignPatterns\Prototype\EarthPlains;
use DesignPatterns\Prototype\EarthSea;
use DesignPatterns\Prototype\TerrainFactory;

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