<?php

namespace App\Composition;

require_once 'Seminar.php';
require_once 'Lecture.php';
require_once 'TimeCostStrategy.php';
require_once 'FixedCostStrategy.php';

$lessons[] = new Seminar(5, new TimeCostStrategy());
$lessons[] = new Lecture(5, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "Оплата за занятие: {$lesson->cost()}. ";
    print "Тип оплаты: {$lesson->chargeType()}" .  PHP_EOL;
}