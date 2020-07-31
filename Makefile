NAME=test

composer-dump:
	docker run --rm -it -v `pwd`:/app composer:latest composer dump-autoload

run-test:
	 php src/xUnit/TestCaseTest.php
