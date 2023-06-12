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

   

    public function testScoreForAllNull()
    {
        $this->throwMany(20, 0);
        $this->assertEquals(0, $this->game->calculateFinalScore());
    }

    public function testScoreForAllTwo()
    {
        $this->throwMany(20, 2);
        $this->assertEquals(40, $this->game->calculateFinalScore());
    }

    
}