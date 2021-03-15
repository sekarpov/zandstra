<?php

require_once "CommsManager.php";

$man = new CommsManager(CommsManager::MEGA);
print ($man->getHeaderText());
print (get_class($man->getApptEncoder())) . "\n";
print ($man->getFooterText());

$man = new CommsManager(CommsManager::BLOGGS);
print ($man->getHeaderText());
print (get_class($man->getApptEncoder())) . "\n";
print ($man->getFooterText());