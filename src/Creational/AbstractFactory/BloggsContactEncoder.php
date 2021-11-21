<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class BloggsContactEncoder extends ContactEncoder
{
    public function encode(): string
    {
        return "Данные о контактах закодированы в формате BloggsCall" .  PHP_EOL;
    }
}