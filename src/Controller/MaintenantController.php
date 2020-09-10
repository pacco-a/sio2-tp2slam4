<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MaintenantController extends AbstractController
{
  public function maintenant()
  {
    // date_default_timezone_set('UTC');

    $day = date("d");
    $hour = date("H");
    $minuts = date("i");

    return $this->render("maintenant.html.twig", [
      "jour" => $day,
      "heure" => $hour,
      "minutes" => $minuts,
    ]);
  }
}
