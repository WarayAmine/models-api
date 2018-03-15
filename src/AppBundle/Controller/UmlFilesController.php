<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Umlfiles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class UmlFilesController extends Controller
{

    public function umlFilesWithNotPropertyAction(  $property){
        $oneProperty =
            $this->getDoctrine()
                ->getRepository(Umlfiles::class)
                ->getUmlFilesWithNotProperty($property);


       return $oneProperty;
    }
}
