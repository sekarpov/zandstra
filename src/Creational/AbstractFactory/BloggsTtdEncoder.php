<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class BloggsTtdEncoder extends TtdEncoder
{
    public function encode(): string
    {
        return "Данные о задании (Think To Do) закодированы в формате BloggsCall" .  PHP_EOL;
    }
}