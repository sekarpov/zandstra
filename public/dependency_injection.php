<?php

use DesignPatterns\Creational\DependencyInjection\ObjectAssembler;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$assembler = new ObjectAssembler("src/Creational/DependencyInjection/objects.xml");
$apptmaker = $assembler->getComponent("AppointmentMaker2");
$out = $apptmaker->makeAppointment();
print $out;