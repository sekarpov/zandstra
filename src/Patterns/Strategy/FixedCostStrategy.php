<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy;

use DesignPatterns\Strategy\CostStrategy;
use DesignPatterns\Strategy\Lesson;

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson) : int
    {
        return 30;
    }

    public function chargeType() : string
    {
        return "Фиксированная ставка";
    }
}