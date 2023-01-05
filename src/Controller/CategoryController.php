<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/admin/category', name: 'category')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Category::class);
        $categories = $repository->findAll();

        return $this->render('category/index.html.twig',
            array('categories' => $categories)
        );
    }

    #[Route('/admin/category/create', name: 'category_create')]
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $category = $form->getData();
            
            $em = $doctrine->getManager();

            $em->persist($category);

            $em->flush();

            return $this->redirectToRoute('category');
        }

        return $this->render('category/create.html.twig',
            array('form' => $form->createView())
        );
    }

    #[Route('/admin/category/update/{id}', name: 'category_update')]
    public function update(Request $request, ManagerRegistry $doctrine, int $id)
    {
        $em = $doctrine->getManager();
        $category = $em->getRepository(Category::class)->find($id);
        
        if(!$category){
            throw $this->createNotFoundException(
                'Brak Kategorii o wskazanym id: '.$id
            );
        }

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $category = $form->getData();

            $em->flush();

            return $this->redirectToRoute('category');
        }

        return $this->render('category/update.html.twig',
            array(
                    'form' => $form->createView(),
                    'category' => $category
                )
        );
    }

    #[Route('/admin/category/delete/{id}', name: 'category_delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();
        
        $category = $em->getRepository(Category::class)->find($id);

        if(!$category){
            throw $this->createNotFoundException(
                'Nie ma Kategorii o wskazanym id: '.$id
            );
        }

        $em->remove($category);

        $em->flush();

        return $this->redirectToRoute('category');
    }
}
