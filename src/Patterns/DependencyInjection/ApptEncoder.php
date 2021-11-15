<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}