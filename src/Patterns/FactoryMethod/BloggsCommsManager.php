<?php

declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCall верхний колонтитул" . PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCall нижний колонтитул" . PHP_EOL;
    }
}