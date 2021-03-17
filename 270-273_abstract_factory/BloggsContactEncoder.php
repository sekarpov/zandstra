<?php

require_once "ContactEncoder.php";

class BloggsContactEncoder extends ContactEncoder
{
    public function encode(): string
    {
        return "Данные о контактах закодированы в формате BloggsCall" .  PHP_EOL;
    }
}