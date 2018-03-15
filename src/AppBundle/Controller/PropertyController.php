<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class PropertyController extends Controller
{

    public function treePropertiesAction($id){

           return new Response(
               '<html><body>Lucky number:'.$id.' </body></html>'
           );

    }
}
