<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
  public function nbaleatoire()
  {
    $nb = random_int(0, 100);

    return $this->render("nbaleatoire.html.twig", [
      "lenombresorti" => $nb,
    ]);
  }
}
