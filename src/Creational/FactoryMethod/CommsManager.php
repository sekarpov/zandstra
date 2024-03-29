<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

abstract class CommsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getFooterText(): string;
}