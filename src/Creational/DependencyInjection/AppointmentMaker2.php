<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\DependencyInjection;

class AppointmentMaker2
{
    private $encoder;
    public function __construct(ApptEncoder $encoder)
    {
        $this->encoder = $encoder;
    }

    public function makeAppointment(): string
    {
        return $this->encoder->encode();
    }
}