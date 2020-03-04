<?php

class Rectangle extends Shape
{
	protected $height;
    protected $width;

	public function __construct($x, $y)
	{
		// Appelle le constructeur de la classe parent, la classe Shape.
		parent::__construct($x, $y);

		$this->height = 20;
		$this->width  = 10;
	}

	public function draw(SvgRenderer $painter)
	{
		// Création de variables intermédiaires.
        $x = $this->location->getX();
		$y = $this->location->getY();
		
		// Utilisation de l'objet renderer pour dessiner un rectangle avec ses propriétés.
		return $painter->drawRectangle($x, $y, $this->color, $this->opacity, $this->width, $this->height);
	}

	public function setSize($width, $height)
	{
		$this->height = $height;
		$this->width  = $width;
	}
}