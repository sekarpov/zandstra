<?php

use DesignPatterns\Creational\FactoryMethod\BloggsCommsManager;
use DesignPatterns\Creational\FactoryMethod\MegaCommsManager;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();

print PHP_EOL;

$mgr = new MegaCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();