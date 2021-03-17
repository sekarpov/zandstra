<?php

require_once "ContactEncoder.php";

class MegaContactEncoder extends ContactEncoder
{
    public function encode(): string
    {
        return "Данные о контактах закодированы в формате MegaCall" .  PHP_EOL;
    }
}