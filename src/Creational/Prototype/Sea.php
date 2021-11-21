<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;

class Sea
{
    private $navigability = 0;

    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }
}