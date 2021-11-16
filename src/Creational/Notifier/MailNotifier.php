<?php

declare(strict_types=1);

namespace DesignPatterns\Notifier;

class MailNotifier extends Notifier
{
    public function inform($message)
    {
        print "Уведомление по электронной почте: {$message}\n";
    }
}