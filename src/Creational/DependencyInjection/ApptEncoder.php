<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\DependencyInjection;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}