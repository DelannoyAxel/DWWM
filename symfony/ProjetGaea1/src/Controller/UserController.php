<?php

namespace App\Controller;

use App\Entity\Possession;
use App\Entity\User;
use App\Form\PossessionType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement as RequirementRequirement;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(Request $request, UserRepository $repository): Response
    {
        $users = $repository->findAll();
        return $this->render('user/index.html.twig', [
            "users" => $users
        ]);
    }

    #[Route("user/create", name: 'create')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $user = new User();
        $user->addPossession(new Possession()); // Adding a default Possession

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', "L'utilisateur et ses possessions ont été ajoutés");

            return $this->redirectToRoute('user');
        }

        return $this->render('user/create.html.twig', [
            'form' => $form->createView()
        ]);
    }



    #[Route("user/{id}", name: "edit")]
    public function edit(Request $request, EntityManagerInterface $em, User $user)
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($user);
            $em->flush();
            $this->addFlash("success", "L'utilisateur a bien été modifié");
            return $this->redirectToRoute("user");
        }

        return $this->render("user/edit.html.twig", [
            "form" => $form
        ]);
    }

    #[Route("user/{id}/delete", name: 'delete', methods: ["POST"])]
    public function delete(EntityManagerInterface $em, User $user)
    {
        $em->remove($user);
        $em->flush();
        $this->addFlash("success","l'utilisateur a bien été supprimé");

        return $this->redirectToRoute("user");
    }
}
