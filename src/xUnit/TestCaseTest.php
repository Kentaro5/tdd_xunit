<?php

namespace App\xUnit;
require 'vendor/autoload.php';

class TestCaseTest extends TestCase
{
    protected $result;

    public function setUp()
    {
        $this->result = new TestResult();
    }

    public function testTemplateMethod()
    {
        $test = new WasRun("testMethod");

        $test->run($this->result);
        assert( 'setUp testMethod tearDown' === $test->log );
        print($this->result->summary())."\n";
    }

    public function testResult()
    {
        $test = new WasRun('testMethod');
        $test->run($this->result);
        assert('1 run, 0 failed' === $this->result->summary());
        print($this->result->summary())."\n";
    }

    public function testFailedResult()
    {
        $test = new WasRun('testBrokenMethod');
        $test->run($this->result);
        assert('1 run, 1 failed' === $this->result->summary());
        print($this->result->summary())."\n";

    }

    public function testFailedResultFormatting()
    {
        $this->result->testStarted();
        $this->result->testFailed();
        assert('1 run, 1 failed' === $this->result->summary());
        print($this->result->summary())."\n";
    }

    public function testSuite()
    {
        $suite = new TestSuite();
        $suite->add(new WasRun('testMethod'));
        $suite->add(new WasRun('testBrokenMethod'));
        $suite->run($this->result);
        assert('2 run, 1 failed' === $this->result->summary());
        print($this->result->summary())."\n";
    }
}

$suite = new TestSuite();
$suite->add(new TestCaseTest('testTemplateMethod'));
$suite->add(new TestCaseTest('testResult'));
$suite->add(new TestCaseTest('testFailedResult'));
$suite->add(new TestCaseTest('testFailedResultFormatting'));
$suite->add(new TestCaseTest('testSuite'));

$result = new TestResult();
$suite->run($result);
