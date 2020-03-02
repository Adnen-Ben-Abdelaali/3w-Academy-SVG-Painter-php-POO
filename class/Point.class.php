<?php

  class Point 
  {
    private $x;
    private $y;

    public function __construct() 
    {
      
      $this->x = 0;
      $this->y = 0;
    }

    public function __get(int $variable) 
    {
      
      return $this->variable;
    }

    
    public function setPoint(int $xCoordinate, int $yCoordiante) 
    {

      $this->x = $xCoordinate;
      $this->y = $yCoordiante;
    }
    
  }

