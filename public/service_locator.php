<?php

use DesignPatterns\Creational\ServiceLocator\AppConfig;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$commsMgr = AppConfig::getInstance()->getCommsManager();
print $commsMgr->getApptEncoder()->encode();