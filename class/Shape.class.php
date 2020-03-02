<?php

  abstract class Shape 
  {
    protected $position;
    protected $color;
    protected $opactiy;

    abstract public function draw();
    
    public function __construct(Point $position) 
    {

      $this->position = $position;
      $this->color = '';
      $this->opacity = 0;
    }

    public function setPosition($xCoordiante, $yCoordiante)
    {

      $this->position->x = $xCoordiante;
      $this->position->y = $yCoordiante;
    }

    public function setColor(String $color)
    {

      $this->color = $color;
    }

    public function setOpacity(float $opacity)
    {
      $this->opactiy = $opactiy;
    }
  }

