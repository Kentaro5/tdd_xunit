<?php

namespace App\xUnit;

require 'vendor/autoload.php';


$test = new WasRun('testMethod');
print($test->wasRun)."\n";
$test->run();
print($test->wasRun)."\n";