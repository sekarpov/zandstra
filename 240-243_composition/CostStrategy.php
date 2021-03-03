<?php


abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson) : int;
    abstract public function chargeType() : string;
}