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

    public function run()
    {
        $this->setUp();
        $method = $this->name;
        $this->$method();
    }

}