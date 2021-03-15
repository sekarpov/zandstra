<?php

require_once "ApptEncoder.php";
require_once "BloggsApptEncoder.php";
require_once "MegaApptEncoder.php";

class CommsManager
{
    const BLOGGS = 1;
    const MEGA = 2;
    private $mode;

    public function __construct(int $mode)
    {
        $this->mode = $mode;
    }

    public function getApptEncoder(): ApptEncoder
    {
        switch ($this->mode) {
            case (self::MEGA) :
                return new MegaApptEncoder();
            default:
                return new BloggsApptEncoder();
        }
    }

    public function getHeaderText(): string
    {
        switch ($this->mode) {
            case (self::MEGA):
                return "MegaCall верхний колонтитул" .  PHP_EOL;
            default:
                return "BloggsCall верхний колонтитул" .  PHP_EOL;
        }
    }

    public function getFooterText(): string
    {
        switch ($this->mode) {
            case (self::MEGA):
                return "MegaCall нижний колонтитул \n\n";
            default:
                return "BloggsCall нижний колонтитул \n\n";
        }
    }
}