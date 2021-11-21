<?php

use DesignPatterns\Structural\Composite\Archer;
use DesignPatterns\Structural\Composite\Army;
use DesignPatterns\Structural\Composite\LaserCannonUnit;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$main_army = new Army();
$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());

$sub_army = new Army();
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());

$main_army->addUnit($sub_army);

print "Атакующая сила: {$main_army->bombardStrength()}\n";