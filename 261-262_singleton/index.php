<?php

require_once "Preferences.php";

$preferences = Preferences::getInstance();
$preferences->setProperty('key', 'Success!');
echo $preferences->getProperty('key');