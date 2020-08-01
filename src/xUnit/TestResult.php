<?php

namespace App\xUnit;

class TestResult
{
    private $runCount;

    public function __construct()
    {
        $this->runCount = 0;
    }

    public function testStarted()
    {
        $this->runCount = $this->runCount + 1;
    }

    public function summary()
    {
        return sprintf('%d run, 0 failed', $this->runCount);
    }
}