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
        $this->addBook(new Book('Carrie', 'Carrie White et une jeune fille timide et mal dans sa peau mais quand ces camarade la harcelle carrie se decouvre de terrifiant pouvoir psyshique', 'Stephen King',));
        $this->addBook(new Book('L Étrange Cas du docteur Jekyll et de M. Hyde', 'Le docteur Jekyll, un philanthrope obsédé par sa double personnalité, met au point une drogue pour séparer son bon côté de son mauvais. C est ce dernier qui, nuit après nuit, prendra finalement le dessus et le transformera en monstrueux Mister Hyde', ' Robert Louis Stevenson',));
        $this->addBook(new Book('Frankenstein ou le Prométhée moderne', 'Frankenstein, d un être vivant assemblé avec des parties de chairs mortes. Horrifié par l aspect hideux de l être auquel il a donné la vie, Frankenstein abandonne son « monstre ». Mais ce dernier, doué d intelligence, se venge par la suite d avoir été rejeté par son créateur et persécuté par la société.', 'Mary Shelley,',));
        $this->addBook(new Book('Necronomicon', 'H.P lovecraft', '',));
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

