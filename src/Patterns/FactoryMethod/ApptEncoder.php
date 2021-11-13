<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}