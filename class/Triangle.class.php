<?php

class Triangle extends Shape
{
    private $points;

    public function __construct($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $this->points = array(new Point($x1, $y1), new Point($x2, $y2), new Point($x3, $y3));
    }

    public function draw(SvgRenderer $painter)
    {
        // Création de variables intermédiaires.
        $x1 = $this->points[0]->getX();
        $y1 = $this->points[0]->getY();
        $x2 = $this->points[1]->getX();
        $y2 = $this->points[1]->getY();
        $x3 = $this->points[2]->getX();
        $y3 = $this->points[2]->getY();

        return $painter->drawTriangle($x1, $y1, $x2, $y2, $x3, $y3, $this->color, $this->opacity);
    }

    public function setCoordinates($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $this->points[0]->moveTo($x1, $y1);
        $this->points[1]->moveTo($x2, $y2);
        $this->points[2]->moveTo($x3, $y3);
    }
}