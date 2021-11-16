<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy;

use DesignPatterns\Strategy\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson) : int;
    abstract public function chargeType() : string;
}