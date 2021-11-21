<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Notifier;

abstract class Notifier
{
    public static function getNotifier(): Notifier
    {
        // получить конкретный класс в соответствии с
        // конфигурацией или другой логикой
        if (rand(1,2) === 1) {
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }
    abstract public function inform($message);
}