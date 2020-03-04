<?php

abstract class Shape
{
	protected $location;

	protected $color;
	protected $opacity;

	abstract public function draw(SvgRenderer $svgRendererObject);

	public function __construct($x, $y)
	{
		$this->location = new Point($x, $y);
		$this->color    = 'black';
		$this->opacity  = 1;
	}

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function setOpacity($opacity)
	{
		$this->opacity = $opacity;
	}

	public function setLocation($x, $y)
    {
        $this->location->moveTo($x, $y);
	}
	/*
	public function setPainter($painter)
	{
		$this->painter = $painter;
	}
	*/
}