<?php

require_once "ApptEncoder.php";

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате BloggsCall" .  PHP_EOL;
    }
}