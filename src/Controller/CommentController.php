<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('comment/create', name: 'comment_create')]
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);
        
        $form->handleRequest($request);

        if($form->isSubmitted()){

            $comment = $form->getData();  

            $em = $doctrine->getManager();
            $em->persist($comment);
        
            $em->flush();
        
            return $this->redirectToRoute('home');
        }

        return $this->render('comment/create.html.twig',
            array('form' => $form->createView())
        );
    }

    #[Route('/comment/id', name: 'comment_update')]
    public function update(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();
        $article = $em->getRepository(Comment::class)->find($id);
    
        if(!$comment){
            throw $this->createNotFoundException(
                'Brak komentarza o wskazanym id: '.$id
            );
        }

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $comment = $form->getData();
            $em->flush();
            return $this->redirectToRoute('comment');
        }

        return $this->render(
            'comment/edit.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    #[Route('comment/delete/{id}', name: 'comment_delete')]
    public function delete(ManagerRegistry $doctrine, Request $request, $id)
    {
        $em = $doctrine->getManager();
        $comment = $em->getRepository(Comment::class)->find($id);

        if(!$comment){
            throw $this->createNotFoundException(
                'Nie ma Artykułu o wskazanym id: '.$id
            );
        }

        $em->remove($comment);
        $em->flush();

        return $this->redirectToRoute($request->getUrl());
    }

}
