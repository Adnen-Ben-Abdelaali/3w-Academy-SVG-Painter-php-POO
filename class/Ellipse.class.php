<?php

  class Ellipse extends Shape
  {
    
    protected $xRadius;
    protected $yRadius;

    public function __construct()
    {

      $this->xRadius = 0;
      $this->yRadius = 0;
    }

    public function setRadius(int $xRadius, int $yRadius)
    {

      $this->xRadius = $xRadius;
      $this->yRadius = $yRadius;
    }

    public function draw() {}
  }
