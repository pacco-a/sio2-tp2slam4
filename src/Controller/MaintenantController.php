<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MaintenantController extends AbstractController
{
  public function maintenant()
  {
    
    //met date en français
    setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
    
    // var heures et minutes
    $hour = date("H");    
    $minuts = date("i");
    
    // jour xx mois année
    $fulldate = strftime("%A %d %B %Y");

    return $this->render("maintenant.html.twig", [
      "heure" => $hour,
      "minutes" => $minuts,
      "fulldate" => $fulldate,
    ]);
  }
}
