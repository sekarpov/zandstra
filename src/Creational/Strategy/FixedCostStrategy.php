<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Strategy;

use DesignPatterns\Creational\Strategy\CostStrategy;
use DesignPatterns\Creational\Strategy\Lesson;

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