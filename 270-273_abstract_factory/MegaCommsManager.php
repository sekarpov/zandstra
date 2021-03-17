<?php

require_once "CommsManager.php";
require_once "MegaApptEncoder.php";
require_once "MegaTtdEncoder.php";
require_once "MegaContactEncoder.php";

class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "MegaCall верхний колонтитул" .  PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "MegaCall нижний колонтитул" .  PHP_EOL;
    }

    public function getTtdEncoder(): TtdEncoder
    {
        return new MegaTtdEncoder();
    }

    public function getContactEncoder(): ContactEncoder
    {
        return new MegaContactEncoder();
    }
}