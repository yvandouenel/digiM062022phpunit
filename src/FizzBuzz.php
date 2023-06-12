<?php
namespace Yvandouenel\Php;
class FizzBuzz {

  public function getFizzBuzz($number) {
    if($number <= 0 ) return "Vous devez tester avec un entier supérieur à 0";
    
    if($number % 3 === 0 && $number % 5 !== 0) return "Fizz";
    if($number % 5 === 0 && $number % 3 !== 0) return "Buzz";
    if($number % 3 === 0 && $number % 5 === 0) return "FizzBuzz";
    return $number;
  }

}