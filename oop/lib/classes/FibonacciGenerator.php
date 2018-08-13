<?php
/**
* manage Fibonacci number related all activities
* @lastUpdate ALauddin 13-07-2018
*/
class FibonacciGenerator
{
    /**
    * holds the first Fibonacci number
    */
    private $firstFibonacciNumber;
   
   /**
    * holds the second Fibonacci number
    */
    private $secondFibonacciNumber;
   
   /**
    * holds the fibonacci number length
    */
    private $fibonacciLength;
   
   /**
    * holds the final fibonacci numbers array
    */
    private $fibonacciNumebrs;

    /**
    * set the first fibonacci number
    * @param int $number
    * @throws Exception
    */
    public function setFirstFiboNumber($number)
    {
	if(!preg_match('/^[0-9]+$/', $number)) {
	    throw new Exception('Please input a valid first fibonacci number');
	}

	$this->firstFibonacciNumber = $number;
    }

    /**
    * set the second fibonacci number
    * @param int $number
    * @throws Exception
    */
    public function setSecondFiboNumber($number)
    {
	if(!preg_match('/^[0-9]+$/', $number)
	   || $this->firstFibonacciNumber >= $number) {
	    throw new Exception('Please input a valid second fibonacci number');
	}

	$this->secondFibonacciNumber = $number;
    }

    /**
    * set the length of fibonacci number
    * @param int $number
    * @throws Exception
    */
    public function setFibonacciLength($number)
    {
	if(!preg_match('/^[0-9]+$/', $number)
	   || $number <= 2
	   || empty($this->firstFibonacciNumber)
	   || empty($this->secondFibonacciNumber)
	) {
	    throw new Exception('Please input a valid fibonacci length');
	}

	$this->fibonacciLength = $number;
    }

    /**
    * get the first fibonacci number
    * @throws Exception
    * @return int
    */
    public function getFisrtFibonacciNumber()
    {
	if(!preg_match('/^[0-9]+$/', $this->firstFibonacciNumber)) {
	    throw new Exception('Please input a valid first fibonacci number');
	}

	return $this->firstFibonacciNumber;
    }

    /**
    * get the first fibonacci number
    * @throws Exception
    * @return int
    */
    public function getSecondFibonacciNumber()
    {
	if(!preg_match('/^[0-9]+$/', $this->secondFibonacciNumber)) {
	    throw new Exception('Please input a valid second fibonacci number');
	}

	return $this->secondFibonacciNumber;
    }

    /**
    * get the fibonacci length
    * @throws Exception
    * @return int
    */
    public function getFibonacciLength()
    {
	if(!preg_match('/^[0-9]+$/', $this->fibonacciLength)
	   || $number <= 2
	   || empty($this->firstFibonacciNumber)
	   || empty($this->secondFibonacciNumber)
	) {
	    throw new Exception('Please input a valid fibonacci length');
	}

	return $this->fibonacciLength;
    }

    /**
    * generate the fibonacci numbers
    */
    public function generateFibonacciNumbers()
    {
	$firstFibo = $this->getFisrtFibonacciNumber();
	$secondFibo = $this->getSecondFibonacciNumber();
	$fiboLength = $this->getFibonacciLength();
	$fiboLength = $fiboLength - 2;
	$fiboNumbers = array($firstFibo, $secondFibo);

	foreach($x = 1; $x <= $fiboLength; $x++) {
	    $fiboNumber = $firstFibo + $secondFibo;
	    $fiboNumbers[] = $fiboNumber;
	    $firstFibo = $secondFibo;
	    $secondFibo = $fiboNumber;
	}
	
	$this->fibonacciNumebrs = $fiboNumbers;  
    }

    /**
    * get the final fibonacci series
    * @return string
    */
    public function getTheFibonacciSeries()
    {
	$fibonacciSeries = implode(',', $this->fibonacciNumebrs); 
	
	return $fibonacciSeries;
    }





