<?php

namespace App\Controller\Admin;

use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route("/admin/recettes", name:"admin.recipe")]

class RecipeController extends AbstractController
{

    #[Route('/', name: '.index')]
    public function index(Request $request, RecipeRepository $repository): Response
    {
        $recipes = $repository->findAll();
        return $this->render('admin/recipe/index.html.twig', ["recipes" => $recipes]);
    }

    // #[Route('/recettes/{slug}-{id}', name: 'recipe.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    // public function show(Request $request, string $slug, int $id, RecipeRepository $repository): Response
    // {
    //     $recipe = $repository->find($id);
    //     if ($recipe->getSlug() !== $slug) {
    //         return $this->redirectToRoute("recipe.show", ["slug" => $recipe->getSlug(), "id" => $recipe->getId()]);
    //     }

    //     return $this->render('recipe/show.html.twig', [
    //         'recipe' => $recipe
    //     ]);
    // }


    #[Route('/create', name: '.create')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $recipe = new Recipe();
        
        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($recipe);
            $em->flush();
            
            $this->addFlash('success', 'La recette a bien été ajoutée');
            return $this->redirectToRoute('admin.recipe.index');
        }
    
        return $this->render('admin/recipe/create.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/{id}', name:".edit", methods:["GET", "POST"], requirements: ["id" =>Requirement::DIGITS])]
    public function edit(Recipe $recipe, Request $request, EntityManagerInterface $em){
        $form = $this->createForm(RecipeType::class,$recipe);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('success', 'la recette à bien été modifiée');
            return $this->redirectToRoute("admin.recipe.index");
        }

        return $this->render('admin/recipe/edit.html.twig', [
            "recipe" => $recipe,
            "form" => $form
        ]);
    }


    #[Route('/{id}', name: '.delete', methods: ["DELETE"], requirements: ["id" =>Requirement::DIGITS])]
    public function remove(EntityManagerInterface $em, Recipe $recipe)
    {
        $em->remove($recipe);
        $em->flush();
        $this->addFlash('success', 'La recette a bien été supprimer');
        return $this->redirectToRoute('admin.recipe.index');

    }
    
}
