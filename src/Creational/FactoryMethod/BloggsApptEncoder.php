<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsCall" .  PHP_EOL;
    }
}