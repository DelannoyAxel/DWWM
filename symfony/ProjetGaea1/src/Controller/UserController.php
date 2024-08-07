<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

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
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', "L'utilisateur a bien été ajoutée");
            return $this->redirectToRoute('user');  
        }

        return $this->render("user/create.html.twig", [
            "form" => $form
        ]);
        
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
