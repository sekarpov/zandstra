<?php

use DesignPatterns\Strategy\FixedCostStrategy;
use DesignPatterns\Strategy\Lecture;
use DesignPatterns\Strategy\Seminar;
use DesignPatterns\Strategy\TimeCostStrategy;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$lessons[] = new Seminar(5, new TimeCostStrategy());
$lessons[] = new Lecture(5, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "Оплата за занятие: {$lesson->cost()}. ";
    print "Тип оплаты: {$lesson->chargeType()}" . PHP_EOL;
}