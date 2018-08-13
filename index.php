<?php
spl_autoload_register(function($className) {
    $classNameWithPath = "lib/classes/{$className}.php";
    if(is_file($classNameWithPath)) {
	require_once($classNameWithPath);
    }
});

try {
    $fiboGen = new FibonacciGenerator();
    $fiboGen->setFirstFiboNumber(0);
    $fiboGen->setSecondFiboNumber(1);
    $fiboGen->setFibonacciLength(4);
    $fiboGen->generateFibonacciNumbers();
    echo $fiboGen->getTheFibonacciSeries();
} catch(EXception $e) {
    echo $e->getMessage();
}
