<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UmlFilePropertie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UmlFilePropertieController extends Controller
{
    public function umlFilePropertiesAction($umlFile){
        $properies = $this->getDoctrine()
                        ->getRepository(UmlFilePropertie::class)
                        ->getUmlFileProperties($umlFile);
        return $properies;
    }
}
