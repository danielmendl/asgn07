<?php
  class gameCharacter
  {
    private $playerName;
    private $score;

    public function setPlayerName($playerName)
    {
      $this->playerName = $playerName;
    }

    public function getPlayerName()
    {
      return $this->playerName;
    }

    public function setScore($score)
    {
      $this->score = $score;
    }

    public function getScore()
    {
      return $this->score;
    }

  } // end of class definition
?>