<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite;

class LaserCannonUnit extends Unit
{
    public function bombardStrength(): int
    {
        return 44;
    }
}