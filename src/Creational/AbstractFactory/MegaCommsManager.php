<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "MegaCall верхний колонтитул" .  PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "MegaCall нижний колонтитул" .  PHP_EOL;
    }

    public function getTtdEncoder(): TtdEncoder
    {
        return new MegaTtdEncoder();
    }

    public function getContactEncoder(): ContactEncoder
    {
        return new MegaContactEncoder();
    }
}