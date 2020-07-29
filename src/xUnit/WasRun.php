<?php

namespace App\xUnit;


class WasRun extends TestCase
{
    public $wasRun;

    public function __construct(String $name)
    {
        $this->wasRun = 0;
        parent::__construct($name);

    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }
}