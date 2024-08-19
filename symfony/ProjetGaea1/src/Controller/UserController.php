<?php
// src/Controller/UserController.php
namespace App\Controller;

use App\Entity\Possession;
use App\Entity\User;
use App\Form\PossessionType;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    #[Route('/user', name: 'user')]
    public function index(Request $request, UserRepository $repository): Response
    {
        $users = $repository->findAll();
        
        $userAges = [];
        foreach ($users as $user) {
            $userAges[$user->getId()] = $this->userService->calculateAge($user->getBirthDate());
        }

        return $this->render('user/index.html.twig', [
            "users" => $users,
            "userAges" => $userAges,
        ]);
    }

    #[Route("user/create", name: 'create')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $user = new User();
        $user->addPossession(new Possession()); 

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
    public function edit(Request $request, EntityManagerInterface $em, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();
            $this->addFlash("success", "L'utilisateur a bien été modifié");
            return $this->redirectToRoute("user");
        }

        return $this->render("user/edit.html.twig", [
            "form" => $form->createView()
        ]);
    }

    #[Route("user/{id}/delete", name: 'delete', methods: ["POST"])]
    public function delete(EntityManagerInterface $em, User $user): Response
    {
        $em->remove($user);
        $em->flush();
        $this->addFlash("success", "L'utilisateur a bien été supprimé");

        return $this->redirectToRoute("user");
    }

    #[Route("user/{id}/possessions", name: "possession")]
    public function showPossessions(int $id, UserRepository $userRepository): Response
    {
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $age = $user->getBirthDate() ? $this->userService->calculateAge($user->getBirthDate()) : 'N/A';

        return $this->render('possession/index.html.twig', [
            'user' => $user,
            'age' => $age
        ]);
    }
}
