<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

class Archer extends Unit
{
    public function bombardStrength(): int
    {
        return 4;
    }
}