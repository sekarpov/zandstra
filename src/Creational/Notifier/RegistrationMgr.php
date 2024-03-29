<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Notifier;

use DesignPatterns\Creational\Strategy\Lesson;

class RegistrationMgr
{
    public function register(Lesson $lesson)
    {
        // Сделать что-нибудь с классом Lesson

        // а теперь отправить кому-нибудь сообщение
        $notifier = Notifier::getNotifier();
        $notifier->inform("Новое занятие: стоимость - ({$lesson->cost()})");
    }
}