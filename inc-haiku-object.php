<?php
  class Haiku
  {
    private $line1;
    private $line2;
    private $line3;
    private $fullPoem;

    public function setLine1($line1)
    {
      $this->line1 = $line1;
    }

    public function getLine1()
    {
      return $this->line1;
    }

    public function setLine2($line2)
    {
      $this->line2 = $line2;
    }    

    public function getLine2()
    {
      return $this->line2;
    }
    
    public function setLine3($line3)
    {
      $this->line3 = $line3;
    }

    public function getLine3()
    {
      return $this->line3;
    }
    
    public function randomize()
    {
      $line1list = array("Like the morning breeze","Trevor is my cat","It is pumpkin time");
      $line2list = array("A pebble stiffens slightly", "Hedgehogs are a decent pet", "Don't be so rough on yourself");
      $line3list = array("Sewn thread made of light","Believe in yourself", "Hydrate or die-drate");
      
      $rand1 = array_rand($line1list);
      $rand2 = array_rand($line2list);
      $rand3 = array_rand($line3list);
      
      
      $this->line1 = $line1list[$rand1];
      $this->line2 = $line2list[$rand2];
      $this->line3 = $line3list[$rand3];
    }

    public function getFullPoem()
    {
      return "$this->line1 </br> $this->line2 </br> $this->line3";
    }
  }
?>