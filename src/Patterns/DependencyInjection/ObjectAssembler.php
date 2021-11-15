<?php

declare(strict_types=1);

namespace DesignPatterns\DependencyInjection;

class ObjectAssembler
{
    private $components = [];
    public function __construct(string $conf)
    {
        $this->configure($conf);
    }

    public function configure(string $conf)
    {
        $data = simplexml_load_file($conf);
        foreach ($data->class as $class) {
            $args = [];
            $name = (string)$class['name'];
            foreach ($class->arg as $arg) {
                $argclass =(string)$arg['inst'];
                $args[(int)$arg['num']] = $argclass;
            }
            ksort($args);
            $this->components[$name] = function () use ($name, $args) {
                $expandedargs = [];

                foreach ($args as $arg) {
                    $arg = '\DesignPatterns\DependencyInjection\\' . $arg;
                    $expandedargs[] = new $arg();
                }
                $rclass = new \ReflectionClass('\DesignPatterns\DependencyInjection\\' . $name);
                return $rclass->newInstanceArgs($expandedargs);
            };
        }
    }

    public function getComponent(string $class)
    {
        if (!isset($this->components[$class])) {
            throw new \Exception("Неизвестный компонент '$class'");
        }
        $ret = $this->components[$class]();
        return $ret;
    }
}