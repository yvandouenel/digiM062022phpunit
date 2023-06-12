<?php

namespace Yvandouenel\Php;

class Bowling
{
  // Tableau des lancers. 
  // A chaque lancer correponde un nombre de quilles tombées (de 0 à 10 sur le premier lancer de chaque frame)
  public $throws = [];


  public function throwBall($pins)
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
  public function calculateFinalScore()
  {
    $score = 0;
    $throwsIndex = 0;

    for ($frame = 0; $frame < 10; ++$frame) {
      // Cas de base du lanceur débutant : ni strike ni spare
      $score += $this->throws[$throwsIndex]
        + $this->throws[$throwsIndex + 1];
      $throwsIndex += 2;
      echo ' score : ' . $score;
    }

    return $score;
  }
}
