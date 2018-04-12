<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Umlfiles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class UmlFilesController extends Controller
{

    public function oneUmlFileWithoutPropertyAction($property){
        $umlFile =
            $this->getDoctrine()
                ->getRepository(Umlfiles::class)
                ->getOneUmlFileWithoutProperty($property);


       return $umlFile;
    }



    public function umlFileWithPropertyAction($property){
        $umlFiles =
            $this->getDoctrine()
                ->getRepository(Umlfiles::class)
                ->getUmlFileWithProperty($property);

      //  var_dump($umlFiles);

        return $umlFiles;
    }

}
