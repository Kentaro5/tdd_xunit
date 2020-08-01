<?php

namespace App\xUnit;
require 'vendor/autoload.php';

class TestCaseTest extends TestCase
{
    private $test;

    public function testTemplateMethod()
    {
        $test = new WasRun("testMethod");
        $result = $test->run();
        assert( 'setUp testMethod tearDown' === $test->log );
        print($result->summary())."\n";
    }

    public function testResult()
    {
        $test = new WasRun('testMethod');
        $result = $test->run();
        assert('1 run, 0 failed' === $result->summary());
        print($result->summary())."\n";
    }

    public function testFailedResult()
    {
        $test = new WasRun('testBrokenMethod');
        $result = $test->run();
        assert('1 run, 1 failed' === $result->summary());
        print($result->summary())."\n";

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

$testTestFailedResult = new TestCaseTest('testFailedResult');
$testTestFailedResult->run();

$testFailedResultFormatting = new TestCaseTest('testFailedResultFormatting');
$testFailedResultFormatting->run();
