<?php

class MegaTtdEncoder extends TtdENcoder
{
    public function encode(): string
    {
        return "Данные о заданиях закодированы MegaCall" . PHP_EOL;
    }
}