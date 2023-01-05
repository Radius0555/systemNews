<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\User;
use App\Form\CommentType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;


class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Article::class);
        $articles = $repository->findBy(
            ['importance' => 2],
            ['date' => 'ASC'],
            4,
            0
        );

        return $this->render('home/index.html.twig',
            array('articles' => $articles)
        );
    }

    #[Route('/list', name: 'home_list')]
    public function list(ManagerRegistry $doctrine, PaginatorInterface $paginator, Request $request): Response
    {
        $repository = $doctrine->getRepository(Article::class);
        $articles = $repository->findAll();

        $paginations = $paginator->paginate(
            $articles,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('home/list.html.twig',
            array('paginations' => $paginations)
        );
    }

    #[Route('/home/{id}', name: 'home_show')]
    public function show(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $article = $doctrine->getRepository(Article::class)->find($id);

        if(!$article){
            throw $this->createNotFoundException(
                'Brak Artykułu o wskazanym id: '.$id
            );
        }

        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted()){

            $comment = $form->getData();
            $comment->setArticle($article);
            $comment->setAuthor($this->getUser()->getEmail());
            
            $date = new \DateTime('@'.strtotime('now'));
            $comment->setDate($date);

            $em = $doctrine->getManager();
            $em->persist($comment);

            $em->flush();

            return $this->redirect('/home/'.$id);
        }

        return $this->render('home/show.html.twig',
            array(
                    'article' => $article,
                    'form' => $form->createView()
                )
        );

    }
}
