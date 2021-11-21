<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Strategy;

use DesignPatterns\Creational\Strategy\CostStrategy;
use DesignPatterns\Creational\Strategy\Lesson;

class TimeCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return ($lesson->getDuration()*5);
    }

    public function chargeType(): string
    {
        return 'Почастовая ставка';
    }
}