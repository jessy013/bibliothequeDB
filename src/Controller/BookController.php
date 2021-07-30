<?php

namespace App\Controller;
use app\service\BookService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    /**
     * @route("/Book/list", name="list_book")
     */
    public function list(BookService $BookService):Response
    {
        $listBook = $BookService->getlist();
        return $this->render('Book/list.html.twig', [
            'controller_name' => 'BookController',
            'listBook' => $listBook
        ]);
    }
}
