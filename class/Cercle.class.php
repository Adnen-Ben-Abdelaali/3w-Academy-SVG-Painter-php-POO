<?php

  class Circle extends Ellipse
  {

    public function setRadius(int $xRadius, int $yRadius = 0)
    {

      $this->xRadius = $xRadius;
    }

    public function draw() {}
  }