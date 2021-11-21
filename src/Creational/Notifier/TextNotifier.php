<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Notifier;

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        print "Текстовое уведомление sms: {$message}\n";
    }
}