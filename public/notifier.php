<?php

use DesignPatterns\Creational\Notifier\RegistrationMgr;
use DesignPatterns\Creational\Strategy\FixedCostStrategy;
use DesignPatterns\Creational\Strategy\Lecture;
use DesignPatterns\Creational\Strategy\Seminar;
use DesignPatterns\Creational\Strategy\TimeCostStrategy;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$lessons1 = new Seminar(4, new FixedCostStrategy());
$lessons2 = new Lecture(4, new TimeCostStrategy());
$mgr = new RegistrationMgr();
$mgr->register($lessons1);
$mgr->register($lessons2);