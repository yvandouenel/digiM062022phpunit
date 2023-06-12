<?php
use PHPUnit\Framework\TestCase;
use Yvandouenel\Php\LeapYear;

class LeapYearTest extends TestCase {

  public function testLeapYearFor2023() {
    $this->assertEquals(false, LeapYear::isLeapYear(2023));
  }
  public function testLeapYearFor2020() {
    $this->assertEquals(true, LeapYear::isLeapYear(2020));
  }
  public function testLeapYearFor2040() {
    $this->assertEquals(true, LeapYear::isLeapYear(2400));
  }
  public function testLeapYearFor2024() {
    $this->assertEquals(true, LeapYear::isLeapYear(2024));
  }
  public function testLeapYearFor1900() {
    $this->assertEquals(false, LeapYear::isLeapYear(1900));
  }
  public function testLeapYearFor2100() {
    $this->assertEquals(false, LeapYear::isLeapYear(2100));
  }
  public function testLeapYearFor4000() {
    $this->assertEquals(true, LeapYear::isLeapYear(4000));
  }

}