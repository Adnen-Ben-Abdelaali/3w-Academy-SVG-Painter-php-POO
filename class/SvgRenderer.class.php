<?php

class SvgRenderer
{
    // Tableau d'objets géométriques de la classe Shape ou de ses dérivés (= ses enfants).
    private $shapes = [];

    public function addShape(Shape $shape)
    {
        $this->shapes[] = $shape;
    }

    public function getResult()
	{
		$svgContainer  = '<svg height="600px" width="800px">';
        foreach($this->shapes as $shape)
        {
            $svgContainer .= $shape->draw($this);
        }
		$svgContainer .= '</svg>';

		return $svgContainer;
	}

    public function drawRectangle($x, $y, $color, $opacity, $width, $height)
	{
		// balise SVG <rect>
		return	"<rect x='$x' y='$y' width='$width' height='$height' fill='$color' opacity='$opacity' />";
    }
    
	public function drawCircle($x, $y, $color, $opacity, $radius)
	{
        // balise SVG <circle>
		return "<circle cx='$x' cy='$y' r='$radius' fill='$color' opacity='$opacity' />";
	}

	public function drawEllipse($x, $y, $color, $opacity, $xRadius, $yRadius)
	{
		//balise SVG <ellipse>
		return "<ellipse cx='$x' cy='$y' rx='$xRadius' ry='$yRadius' fill='$color' opacity='$opacity' />";
	}

    public function drawTriangle($x1, $y1, $x2, $y2, $x3, $y3, $color, $opacity)
    {
        // balise SVG <polygon>
        return "<polygon points='$x1 $y1,$x2 $y2,$x3 $y3' fill='$color' opacity='$opacity' />";
    }
}