<?php

declare(strict_types=1);

namespace DesignPatterns\AbstractFactory;

abstract class TtdEncoder
{
    abstract public function encode(): string;
}