<?php

  function classLoader($class) 
  {

    require_once "class/" .$class .".class.php";
  }

  spl_autoload_register("classLoader");

  $pointUn = new Point();
  $pointUn->setPoint(5, 6);
  $pointDeux = new Point();
  $pointDeux->setPoint(20, 70);
  $pointTrois = new Point();
  $pointTrois->setPoint(70, 100);

  $triangle = new Triangle();
  $triangle->setSommets($pointUn, $pointDeux, $pointTrois);
  echo $triangle;