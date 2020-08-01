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

    public function testResult()
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' === $result->summary());
    }

    public function testFailedResultFormatting()
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();
        assert('1 run, 1 failed' === $result->summary());
        print($result->summary())."\n";
    }
}

$testTemplateMethod = new TestCaseTest('testTemplateMethod');
$testTemplateMethod->run();

$testTestResult = new TestCaseTest('testResult');
$testTestResult->run();

//$testtestFailedResult = new TestCaseTest('testFailedResult');
//$testtestFailedResult->run();
