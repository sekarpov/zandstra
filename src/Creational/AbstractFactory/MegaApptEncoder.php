<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате MegaCall" .  PHP_EOL;
    }
}