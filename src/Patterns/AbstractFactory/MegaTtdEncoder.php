<?php

declare(strict_types=1);

namespace DesignPatterns\AbstractFactory;

class MegaTtdEncoder extends TtdENcoder
{
    public function encode(): string
    {
        return "Данные о заданиях закодированы MegaCall" . PHP_EOL;
    }
}