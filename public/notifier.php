<?php

use DesignPatterns\Notifier\RegistrationMgr;
use DesignPatterns\Strategy\FixedCostStrategy;
use DesignPatterns\Strategy\Lecture;
use DesignPatterns\Strategy\Seminar;
use DesignPatterns\Strategy\TimeCostStrategy;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$lessons1 = new Seminar(4, new FixedCostStrategy());
$lessons2 = new Lecture(4, new TimeCostStrategy());
$mgr = new RegistrationMgr();
$mgr->register($lessons1);
$mgr->register($lessons2);