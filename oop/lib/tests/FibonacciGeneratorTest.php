<?php
class FibonacciGeneratorTest 
{
    public function testGenerateFibonacciNumbers()
    {
	$fiboGen = new FibonacciGenerator();
	$fiboGen->setFirstFiboNumber(0);
	$fiboGen->setSecondFiboNumber(1);
	$fiboGen->setFibonacciLength(4);
	$totalFibo = $fiboGen->generateFibonacciNumbers();
	if(count($totalFibo) == 4) {
	    echo "test passed";
	} else {
	    echo "test failed";
	}
    }
}

$fibotest = new FibonacciGeneratorTest();
$fibotest->testGenerateFibonacciNumbers();
