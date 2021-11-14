<?php

declare(strict_types=1);

namespace DesignPatterns\Prototype;

class Sea
{
    private $navigability = 0;

    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }
}