<?php

declare(strict_types=1);

namespace DesignPatterns\Notifier;

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        print "Текстовое уведомление sms: {$message}\n";
    }
}