<?php

namespace App\xUnit;
require 'vendor/autoload.php';

class TestCaseTest extends TestCase
{
    private $test;

    public function testTemplateMethod()
    {
        $test = new WasRun("testMethod");
        $test->run();
        assert( 'setUp testMethod tearDown' === $test->log );
    }
}

$testTemplateMethod = new TestCaseTest('testTemplateMethod');
$testTemplateMethod->run();
