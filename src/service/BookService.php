<?php
namespace App\Service;

use App\Entity\Book;

class BookService
{
    
    private $_BookService= [];

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

