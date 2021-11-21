<?php

use DesignPatterns\Creational\Strategy\FixedCostStrategy;
use DesignPatterns\Creational\Strategy\Lecture;
use DesignPatterns\Creational\Strategy\Seminar;
use DesignPatterns\Creational\Strategy\TimeCostStrategy;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$lessons[] = new Seminar(5, new TimeCostStrategy());
$lessons[] = new Lecture(5, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "Оплата за занятие: {$lesson->cost()}. ";
    print "Тип оплаты: {$lesson->chargeType()}" . PHP_EOL;
}