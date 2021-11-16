<?php

declare(strict_types=1);

namespace DesignPatterns\AbstractFactory;

class MegaContactEncoder extends ContactEncoder
{
    public function encode(): string
    {
        return "Данные о контактах закодированы в формате MegaCall" .  PHP_EOL;
    }
}