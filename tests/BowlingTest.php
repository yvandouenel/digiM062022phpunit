<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Yvandouenel\Php\Bowling;

class BowlingTest extends TestCase
{
  protected Bowling $game;

  protected function setUp(): void
  {
    $this->game = new Bowling();
  }

  protected function throwMany(int $number, int $pins)
  {
    for ($i = 0; $i < $number; ++$i) {
      $this->game->throwBall($pins);
    }
  }
  protected function throwStrike()
  {
    $this->game->throwBall(10);
  }
  protected function throwSpare()
  {
    $this->game->throwBall(3);
    $this->game->throwBall(7);
  }


  public function testScoreForAllNull()
  {
    $this->throwMany(20, 0);
    $this->assertEquals(0, $this->game->calculateFinalScore());
  }
  public function testScoreForAllStrike()
  {
    $this->throwMany(12, 10);
    $this->assertEquals(300, $this->game->calculateFinalScore());
  }
  public function testScoreForAllSpare()
  {
    $this->throwMany(21, 5);
    $this->assertEquals(150, $this->game->calculateFinalScore());
  }
  public function testScoreForAllTwo()
  {
    $this->throwMany(20, 2);
    $this->assertEquals(40, $this->game->calculateFinalScore());
  }

  public function testScoreForOneStrikeAnd18Two()
  {
    $this->throwStrike();
    $this->throwMany(18, 2);
    $this->assertEquals(50, $this->game->calculateFinalScore());
  }
  public function testScoreForOneStrikeAnd18Four()
  {
    $this->throwStrike();
    $this->throwMany(18, 4);
    $this->assertEquals(90, $this->game->calculateFinalScore());
  }
  public function testScoreForOneSpareAnd18Four()
  {
    $this->throwSpare();
    $this->throwMany(18, 4);
    $this->assertEquals(86, $this->game->calculateFinalScore());
  }
}
