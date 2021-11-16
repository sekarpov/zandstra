<?php

declare(strict_types=1);

namespace DesignPatterns\ServiceLocator;

use DesignPatterns\AbstractFactory\BloggsCommsManager;
use DesignPatterns\AbstractFactory\CommsManager;
use DesignPatterns\AbstractFactory\MegaCommsManager;

class AppConfig
{
    public static $instance;
    private $commsManager;

    private function __construct()
    {
        // будет выполнено только один раз
        $this->init();
    }

    public function init()
    {
        switch (Settings::$COMMSTYPE) {
            case 'Mega':
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }

    public static function getInstance()
    {
        if(empty(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getCommsManager(): CommsManager
    {
        return $this->commsManager;
    }
}