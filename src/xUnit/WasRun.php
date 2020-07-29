<?php

namespace App\xUnit;

class WasRun
{
    public $wasRun;
    private $name;

    public function __construct(String $name)
    {
        $this->wasRun = 0;
        $this->name = $name;
    }

    public function run()
    {
        $method = $this->name;
        $this->$method();
    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }
}