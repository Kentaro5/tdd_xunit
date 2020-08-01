<?php

namespace App\xUnit;

class TestSuite
{
    private $tests;
    public function __construct()
    {
        $this->tests = [];
    }

    public function add($test)
    {
        array_push($this->tests,$test);
    }

    public function run($result)
    {
        foreach ( $this->tests as $test ){
            $test->run($result);
        }
    }
}