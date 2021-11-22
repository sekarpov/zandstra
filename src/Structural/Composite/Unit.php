<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    abstract public function bombardStrength(): int;
}