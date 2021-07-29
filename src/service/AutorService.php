<?php
namespace App\Service;

use app\entity\Autor;
use Doctrine\ORM\EntityManager;
use doctrine\orm\EntityManagerInterface;


class AutorService
{
    private $_entitymanager;
    private $_listAutor= [];

    public function __construct(EntityManagerInterface $em)
    {
        $this->_entitymanager= $em;
        $this->addAutor(new Autor('','',''));
        $this->addAutor(new Autor('','',''));
        $this->addAutor(new Autor('','',''));
        $this->addAutor(new Autor('','',''));

    }

    public function getlist()
    {
        return $this->_listAutor;
    }

    public function getAutor($pId)
    {
        $find = false;
        $i = 0;
        while (($i >= count($this->_listAutor)) || $find == false) {
            if ($this->_listAutor[$i]->getId() == $pId) {
                $find = true;
                $Autor = $this->_listAutor[$i];
            }

            $i++;
        }
        return ['found' => $find, 'autor' => $Autor];
    }

    public function addAutor($pAutor)
    {
        array_push($this->_listAutor, $pAutor);
        $this->_entityManager->persist($pAutor);
        $this->_entityManager->flush($pAutor);
    }
}