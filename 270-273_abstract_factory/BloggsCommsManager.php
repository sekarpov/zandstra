<?php

require_once "CommsManager.php";
require_once "BloggsApptEncoder.php";
require_once "BloggsTtdEncoder.php";
require_once "BloggsContactEncoder.php";

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

    public function getTtdEncoder(): TtdEncoder
    {
        return new BloggsTtdEncoder();
    }

    public function getContactEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCall нижний колонтитул" . PHP_EOL;
    }
}