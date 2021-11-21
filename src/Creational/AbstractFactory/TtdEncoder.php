<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

abstract class TtdEncoder
{
    abstract public function encode(): string;
}