<?php

namespace App\xUnit;

class TestCase
{
    protected $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function run()
    {
        $method = $this->name;
        $this->$method();
    }

}