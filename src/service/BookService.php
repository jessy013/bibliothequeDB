<?php
namespace App\Service;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class BookService extends ServiceEntityRepository
{
    
    private $_listBook= [];

    public function __construct()
    {
        $this->addBook(new Book('','','',));
        $this->addBook(new Book('','','',));
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

