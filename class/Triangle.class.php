<?php

  class Triangle extends Shape
  {
    private $sommets;
    
    public function __construct()
    {

      $this->sommets = array();
    }

    public function setSommets(Point $premierSommet, Point $deuxiemeSommet, Point $troisiemeSommet)
    {

      $this->sommets[0][0] = $premierSommet->x;
      $this->sommets[0][1] = $premierSommet->y;
      $this->sommets[1][0] = $deuxiemeSommet->x;
      $this->sommets[1][1] = $deuxiemeSommet->y;
      $this->sommets[2][0] = $troisiemeSommet->x;
      $this->sommets[2][1] = $troisiemeSommet->y;
    }

    public function draw() {}

    public function __toString()
    {  

      return var_dump($this->sommets);
      
    }
  }
