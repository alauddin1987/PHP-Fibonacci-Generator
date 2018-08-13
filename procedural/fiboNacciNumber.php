<?php
/**
* get the fibonacchi numbers
* @param int $firstNumber
* @param int $secondNumber
* @param int $lengthOfFibonacciNumber
* @throws Exception
* @return string
*/
function getFibonacciNumbers($firstNumber, $secondNumber, $lengthOfFibonacciNumber)
{
   if(!preg_match('/^[0-9]+$/', $firstNumber) || $firstNumber >= $secondNumber) {
      throw new Exception('First number seems to be incorrect');
   }

   if(!preg_match('/^[1-9][0-9]*$/', $secondNumber)) {
      throw new Exception('Second number seems to be incorrect');
   }

   if(!preg_match('/^[0-9]+$/', $lengthOfFibonacciNumber)
      || $lengthOfFibonacciNumber <= 2) {
      throw new Exception('lengthOfFibonacciNumber number must be greater than 2');
   }

   $fibonacciNumbers = array($firstNumber, $secondNumber);
   $lengthOfFibonacciNumber = $lengthOfFibonacciNumber - 2;
   
   for($x = 1; $x <= $lengthOfFibonacciNumber; $x++) {
      $fibonacciNumber = $firstNumber + $secondNumber;
      $fibonacciNumbers[] = $fibonacciNumber;
      $firstNumber = $secondNumber;
      $secondNumber = $fibonacciNumber;
   }

   $fibonacciNumbers = implode(',', $fibonacciNumbers);
   return $fibonacciNumbers;
}

// use the functions
try {
   $numbers = getFibonacciNumbers(10, 12, 10);
   echo $numbers;
} catch(Exception $e) {
   echo $e->getMessage();
}
