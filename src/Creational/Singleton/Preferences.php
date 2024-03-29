<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

class Preferences
{
    private $props = [];
    public static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(empty(self::$instance)){
            self::$instance = new Preferences();
        }

        return self::$instance;
    }

    public function setProperty(string $key, string $val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty(string $key): string
    {
        return $this->props[$key];
    }
}