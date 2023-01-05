<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ArticleController extends AbstractController
{
    #[Route('/admin/article', name: 'article')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Article::class);
        $articles = $repository->findAll();

        return $this->render('article/index.html.twig',
            array('articles' => $articles)
        );
    }

    #[Route('/admin/article/create', name: 'article_create')]
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        $article = new Article();
        
        $form = $this->createForm(ArticleType::class, $article);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $article = $form->getData();
            $image = $form->get('image')->getData();

            if($image){
                $nameImage = pathinfo($image->getClientOriginalName(),
                PATHINFO_FILENAME).'.'.$image->guessExtension();

                try{
                    $image->move(
                        $this->getParameter('image_path'), $nameImage
                    );
                }catch(FileException $e){
                    $e->getMessage();
                }
            }
        
        $date = new \DateTime('@'.strtotime('now'));
        $article->setDate($date);
        $article->setImage($nameImage);
        $em = $doctrine->getManager();
        $em->persist($article);

        $em->flush();
        
        return $this->redirectToRoute('article');
        }

        return $this->render('article/create.html.twig',
            array('form' => $form->createView())  
        );
    }

    #[Route('/admin/article/{id}', name: 'article_show')]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $article = $doctrine->getRepository(Article::class)->find($id);

        if(!$article){
            throw $this->createNotFoundException(
                'Brak Artykułu o wskazanym id: '.$id
            );
        }

        return $this->render('article/show.html.twig',
            array('article' => $article)
        );
    }

    #[Route('/admin/article/update/{id}', name: 'article_update')]
    public function update(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();
        $article = $em->getRepository(Article::class)->find($id);
        $image = $article->getImage();

        if(!$article){
            throw $this->createNotFoundException(
                'Nie ma artykułu o wskazanym id '.$id
            );
        }

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $article = $form->getData();

            $img = $form->get('image')->getData();

            if($img != Null){
                $nameImage = pathinfo($img->getClientOriginalName(),
                    PATHINFO_FILENAME);
                
                try{
                    $img->move(
                    $this->getParameter('image_path'), $nameImage
                );
                    $article->setImage($nameImage);
                }catch(FileException $e){
                    $e->getMessage();
                }    
            }else{
                $article->setImage($image);
            }
        $date = new \DateTime('@'.strtotime('now'));
        $article->setDate($date);    
        $em->flush();
        return $this->redirectToRoute('article');
        }

    return $this->render(
        'article/update.html.twig',
        array(
            'form' => $form->createView()
            )
        );
    }
    
    #[Route('/admin/article/delete/{id}', name: 'article_delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();
        $article = $em->getRepository(Article::class)->find($id);

        if(!$article){
            throw $this->createNotFoundException(
                'Nie ma Artykułu o wskazanym id: '.$id
            );
        }

        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('article');
    }
}