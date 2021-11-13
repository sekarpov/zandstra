<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy;

use DesignPatterns\Strategy\CostStrategy;
use DesignPatterns\Strategy\Lesson;

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