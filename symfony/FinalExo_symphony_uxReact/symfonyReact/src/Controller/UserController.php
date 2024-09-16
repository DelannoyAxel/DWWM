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
use Symfony\Component\Serializer\SerializerInterface as SerializerInterface;

class UserController extends AbstractController
{
    
    #[Route("/api/users", name: "get_users", methods: ["GET"])]
    public function getUsers(EntityManagerInterface $em, SerializerInterface $serializer): JsonResponse
    {
        $users = $em->getRepository(User::class)->findAll();

        //on converti les objets User en JSON
        $dataJson = $serializer->serialize($users, 'json', ['groups' => 'user:read']);

        return new JsonResponse($dataJson, 200, [], true); 
    }


    #[Route("/api/users/{id}", name:"delete_user", methods: ["DELETE"])]
    public function deleteUser($id, EntityManagerInterface $em): JsonResponse
    {
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            return new JsonResponse(['error' => 'User not found'], 404);
        }

        $em->remove($user);
        $em->flush();

        return new JsonResponse(['status' => 'User deleted'], 200);
    }
}