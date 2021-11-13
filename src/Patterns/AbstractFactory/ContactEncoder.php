<?php

declare(strict_types=1);

namespace DesignPatterns\AbstractFactory;

abstract class ContactEncoder
{
    abstract public function encode(): string;
}