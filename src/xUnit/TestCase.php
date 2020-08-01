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

    public function run():TestResult
    {
        $result = new TestResult();
        $result->testStarted();
        $this->setUp();
        $method = $this->name;
        $this->$method();
        $this->tearDown();

        return $result;
    }

}