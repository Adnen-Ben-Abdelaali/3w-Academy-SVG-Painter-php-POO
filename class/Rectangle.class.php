<?php

  class Rectangle extends Shape
  {
    protected $width;
    protected $height;

    public function __construct()
    {

      $this->width = 0;
      $this->height = 0;
    }

    public function draw() {}

    public function setSize(int $height, int $width)
    {

      $this->height = $height;
      $this->width = $width;
    }
  }