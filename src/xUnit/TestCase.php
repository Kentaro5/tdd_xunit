<?php

namespace App\xUnit;



class TestCase
{
    protected $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    public function run(TestResult $result):TestResult
    {
        $result->testStarted();
        $this->setUp();
        try {
            $method = $this->name;
            $this->$method();
        } catch (\Exception $e) {
            $result->testFailed();
        }

        $this->tearDown();

        return $result;
    }

}