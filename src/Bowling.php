<?php

namespace Yvandouenel\Php;

class Bowling
{
  // Tableau des lancers. 
  // A chaque lancer correpond un nombre de quilles tombées (de 0 à 10 sur le premier lancer de chaque frame)
  public $throws = [];


  public function throwBall(int $pins)
  {
    // roll = rouler
    // pins = quilles
    $this->throws[] = $pins;
  }

  /**
   * calcul global du score.
   *
   * @return int|mixed
   */
  public function calculateFinalScore(): int
  {
    $score = 0;
    $throwsIndex = 0;

    for ($frame = 0; $frame < 10; ++$frame) {
      
      if (!$this->isStrike($throwsIndex)) {
        // Cas de base du lanceur débutant : ni strike ni spare
        $score += $this->throws[$throwsIndex]
          + $this->throws[$throwsIndex + 1];
        $throwsIndex += 2;
        echo ' score : ' . $score;
      } else if($this->isStrike($throwsIndex)) {
        // Cas d'un strike
        $score +=  10 + $this->bonusStrike($throwsIndex);
        $throwsIndex += 1;
      }
    }

    return $score;
  }
  public function isStrike($throwsIndex): bool
  {
    if($this->throws[$throwsIndex] === 10) return true;
    return false;
  }
  public function bonusStrike($throwsIndex): int
  {
    return 0;
  }
}
