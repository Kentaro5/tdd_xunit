<?php

namespace App\xUnit;


class WasRun extends TestCase
{
    public $log;

    public function testMethod()
    {
        $this->log = $this->log.' testMethod';
    }

    public function setUp()
    {
        $this->log = 'setUp';
    }

    public function tearDown()
    {
        $this->log = $this->log.' tearDown';
    }
}