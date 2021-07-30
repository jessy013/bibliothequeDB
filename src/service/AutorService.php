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
        $this->addAutor(new Autor('Stine','Robert Lawrence','connu sous le nom de R. L. Stine, né le 8 octobre 1943 à Columbus en Ohio, est un écrivain américain. Il est l auteur de nombreuses histoires d horreur « grand public », notamment à travers les collections Frissons et Chair de poule. Il se décrit souvent comme le Stephen King des enfants.'));
        $this->addAutor(new Autor('King','Stephen,Edwin','Stephen King est un écrivain américain né le 21 septembre 1947 à Portland, dans l État du Maine. ... Il obtient en 1970 sa licence en littérature ainsi qu un certificat d aptitude à enseigner et une mention en élocution et en art dramatique à l université du Maine'));
        $this->addAutor(new Autor('Stevenson', 'Robert Louis','né le 13 novembre 1850 à Édimbourg et mort le 3 décembre 1894 à Vailima, est un écrivain écossais et un grand voyageur, célèbre pour ses romans L Île au trésor, L Étrange Cas du docteur Jekyll et de M. Hyde et pour son récit Voyage avec un âne dans les Cévennes'));
        $this->addAutor(new Autor('Shelley','Mary', 'Mary Shelley [ˈmɛəɹɪ ˈʃɛli], née Mary Wollstonecraft Godwin le 30 août 1797 à Somers Town, un faubourg de Londres, et morte le 1ᵉʳ février 1851 à Belgravia, est une femme de lettres britannique, romancière, dramaturge, essayiste, biographe et auteur de récits de voyage'));

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