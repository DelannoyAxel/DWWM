<?php

namespace App\Controller\Admin;

use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\CategoryRepository;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

#[Route("/admin/recettes", name:"admin.recipe")]

class RecipeController extends AbstractController
{

    #[Route('/', name: '.index')]
    public function index(Request $request, RecipeRepository $repository , CategoryRepository $categoryRepository,EntityManagerInterface $em ): Response
    {

        $this->denyAccessUnlessGranted('ROLE_USER');
        $page = $request->query->getInt("page", 1);
        $limite =2;
        $recipes = $repository->paginateRecipes($page, $limite);
        $maxPage = ceil($recipes->count() / $limite) ;
        return $this->render('admin/recipe/index.html.twig', [
            "recipes" => $recipes,
            "maxPage" => $maxPage,
            "page" => $page
        ]);
    }


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
            // /** @var UploadedFile $file */
            // $file = $form->get('thumbnailFile')->getData();
            // $filename = $recipe->getId() . "." . $file->getClientOriginalExtension();
            // $file->move($this->getParameter("kernel.project_dir"). "/public/recettes/images", $filename);
            // $recipe->setThumbnail($filename);
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
