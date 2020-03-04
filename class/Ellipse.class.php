<?php

class Ellipse extends Shape
{
	protected $xRadius;
	protected $yRadius;

	public function __construct($x, $y)
	{
		// Appelle le constructeur de la classe parent, la classe Shape.
		parent::__construct($x, $y);

		$this->xRadius = 20;
		$this->yRadius = 10;
	}

	public function draw(SvgRenderer $painter)
	{
		// Création de variables intermédiaires.
        $x = $this->location->getX();
		$y = $this->location->getY();
		
		// Utilisation de l'objet renderer pour dessiner une ellipse avec ses propriétés.
		return $painter->drawEllipse($x, $y, $this->color, $this->opacity, $this->xRadius, $this->yRadius);
	}

	public function setRadius($xRadius, $yRadius)
	{
		$this->xRadius = $xRadius;
		$this->yRadius = $yRadius;
	}
}