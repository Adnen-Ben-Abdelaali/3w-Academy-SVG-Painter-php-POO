<?php

  class SvgRenderer
  {
    private $shapes;
    private $results;

    public function __construct()
    {

      $this->shapes = array();
      $this->results = array();
    }

    public function addShape(Shape $shape)
    {

      array_push($this->shapes, $shape);
    }
  }