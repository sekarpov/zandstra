<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\DependencyInjection;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsCall" .  PHP_EOL;
    }
}