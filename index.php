<?php

// Liste des classes dans l'ordre des dépendances.
/*
include 'Point.class.php';

include 'Shape.class.php';

include 'Ellipse.class.php';
include 'Circle.class.php';
include 'Rectangle.class.php';
include 'Square.class.php';
include 'Triangle.class.php';

include 'SvgRenderer.class.php';
*/
function loadClass($class) 
{

  require_once "./class/" .$class .".class.php";
}

spl_autoload_register("loadClass");


/********** CODE PRINCIPAL **********/

// Création et initialisation d'un rectangle.
$rectangle1 = new Rectangle(50, 20);
$rectangle1->setColor('firebrick');
$rectangle1->setSize(200, 100);

// Création et initialisation d'une ellipse.
$ellipse1 = new Ellipse(600, 180);
$ellipse1->setColor('seagreen');
$ellipse1->setRadius(40, 80);

// Création et initialisation d'un carré.
$square1 = new Square(400, 200);
$square1->setColor('deepskyblue');
$square1->setOpacity(0.5);
$square1->setSize(100);

// Création et initialisation d'un cercle.
$circle1 = new Circle(300, 250);
$circle1->setColor('gold');
$circle1->setOpacity(0.33);
$circle1->setRadius(180);

// Création et initialisation d'un triangle.
$triangle1 = new Triangle(60, 60, 200, 250, 60, 250);
$triangle1->setColor('purple');
$triangle1->setOpacity(0.75);

$renderer = new SvgRenderer();

// Ajout des différents objets géométriques au moteur graphique.
$renderer->addShape($rectangle1);
$renderer->addShape($square1);
$renderer->addShape($circle1);
$renderer->addShape($ellipse1);
$renderer->addShape($triangle1);

$svgContainer = $renderer->getResult();


include 'index.phtml';