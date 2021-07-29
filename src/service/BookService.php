<?php
namespace App\Service;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class BookService extends ServiceEntityRepository
{
    
    private $_listBook= [];

    public function __construct()
    {
        $this->addBook(new Book('Le Masque hanté', ' Celui-là fera l affaire  pense Carolyn en choisissant pour la fête de Halloween le masque le plus horrible dans la boutique de farces et attrapes Mais, pourquoi, une fois posé sur son visage le masque s anime-t-il tout à coup ? Pourquoi la voix de Carolyn devient-elle soudain grave et menaçante ?','R.L stine',));
        $this->addBook(new Book('la rue maudite','','',));
        $this->addBook(new Book('', '', '',));
        $this->addBook(new Book('', '', '',));
        $this->addBook(new Book('', '', '',));
    }
    public function getlist()
    {
        return $this->_listBook;
    }

    public function addBook($pBook)
    {
        array_push($this->_listBook, $pBook);
    }

}

