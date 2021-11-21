<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class MegaTtdEncoder extends TtdENcoder
{
    public function encode(): string
    {
        return "Данные о заданиях закодированы MegaCall" . PHP_EOL;
    }
}