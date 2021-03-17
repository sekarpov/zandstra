<?php

require_once "TtdEncoder.php";

class BloggsTtdEncoder extends TtdEncoder
{
    public function encode(): string
    {
        return "Данные о задании (Think To Do) закодированы в формате BloggsCall" .  PHP_EOL;
    }
}