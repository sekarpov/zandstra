<?php

use DesignPatterns\Singleton\Preferences;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$preferences = Preferences::getInstance();
$preferences->setProperty('key', 'Success!');
echo $preferences->getProperty('key');