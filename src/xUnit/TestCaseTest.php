<?php

namespace App\xUnit;
require 'vendor/autoload.php';

class TestCaseTest extends TestCase
{


    public function testRunning()
    {

        $this->test->run();
        assert(1 === $this->test->wasRun);
    }

    public function testSetup()
    {
        $this->test->run();
        assert( 1 === $this->test->wasSetUp );
    }
}

$testCasetTest = new TestCaseTest('testRunning');
$testCasetTest->run();
$testCasetTestSetUp = new TestCaseTest('testSetUp');
$testCasetTestSetUp->run();
