<?php
/**
 * Created by PhpStorm.
 * User: Achrafpc
 * Date: 14/03/2018
 * Time: 18:34
 */

namespace AppBundle\Repository;


class UmlFilesRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUmlFilesWithNotProperty($property){
        $sql = ' 
                SELECT u.*
                FROM umlfiles u
                WHERE u.id NOT IN
                (SELECT up.uml_file_id
                FROM uml_file_propertie up
                WHERE up.property_id = ".$property.")
                LIMIT 1
        ';


        return $this->getEntityManager()->getConnection()->executeQuery($sql)->fetchAll();
    }
}