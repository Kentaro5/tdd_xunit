<?php

namespace App\xUnit;


class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    public function testMethod()
    {
        $this->wasRun = 1;
    }

    public function setUp()
    {
        $this->wasRun = 'None';
        $this->wasSetUp = 1;
    }
}