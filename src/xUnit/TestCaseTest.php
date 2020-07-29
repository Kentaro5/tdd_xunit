<?php

namespace App\xUnit;
require 'vendor/autoload.php';

class TestCaseTest extends TestCase
{


    public function testRunning()
    {
        $test = new WasRun("testMethod");
        assert(0 === $test->wasRun);
        $test->run();
        assert(1 === $test->wasRun);
    }
}

$testCasetTest = new TestCaseTest('testRunning');
$testCasetTest->run();
