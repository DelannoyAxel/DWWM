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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    
    #[Route("/api/users", name:"get_users", methods: ["GET"])]


    public function getUsers(EntityManagerInterface $em): JsonResponse
    {
        $users = $em->getRepository(User::class)->findAll();

        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'id' => $user->getId(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'adresse' => $user->getAdresse(),
                'email' => $user->getEmail(),
                'tel' => $user->getTel(),
            ];
        }

        return new JsonResponse($data);
    }
}