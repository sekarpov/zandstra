<?php

require_once "CommsManager.php";
require_once "BloggsApptEncoder.php";

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCall верхний колонтитул" . PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCall нижний колонтитул" . PHP_EOL;
    }
}