<?php
use PHPUnit\Framework\TestCase;
use Yvandouenel\Php\FizzBuzz;
class FizzBuzzTest extends TestCase {

  protected FizzBuzz $fizzBuzz;

  protected function setUp(): void {
    $this->fizzBuzz = new FizzBuzz();
  }
  public function testErrorForZeroOrNegative() {
    // getFizzBuzz doit renvoyer un message d'erreur si le nombre est nul ou négatif
    $this->assertEquals("Vous devez tester avec un entier supérieur à 0", $this->fizzBuzz->getFizzBuzz(0));
  }
  public function testOneForOne() {
    // getFizzBuzz doit renvoyer 1 pour 1
    $this->assertEquals(1, $this->fizzBuzz->getFizzBuzz(1));
  }
  public function testTwoForTwo() {
    // getFizzBuzz doit renvoyer 2 pour 2
    $this->assertEquals(2, $this->fizzBuzz->getFizzBuzz(2));
  }
  public function testFizzForThree() {
    // getFizzBuzz doit renvoyer Fizz pour 3
    $this->assertEquals("Fizz", $this->fizzBuzz->getFizzBuzz(3));
  }
  public function testBuzzForFive() {
    // getFizzBuzz doit renvoyer Buzz pour 5
    $this->assertEquals("Buzz", $this->fizzBuzz->getFizzBuzz(5));
  }
  public function testFizzForSix() {
    // getFizzBuzz doit renvoyer Fizz pour 3
    $this->assertEquals("Fizz", $this->fizzBuzz->getFizzBuzz(6));
  }
  public function testBuzzForTen() {
    // getFizzBuzz doit renvoyer Buzz pour 10
    $this->assertEquals("Buzz", $this->fizzBuzz->getFizzBuzz(10));
  }
  public function testFizzBuzzForFifteen() {
    // getFizzBuzz doit renvoyer FizzBuzz pour 15
    $this->assertEquals("FizzBuzz", $this->fizzBuzz->getFizzBuzz(15));
  }
}