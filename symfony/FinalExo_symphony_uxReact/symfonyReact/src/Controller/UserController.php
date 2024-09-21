<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;


class UserController extends AbstractController
{
    #[Route('/api/users', name: 'api_users', methods: ['GET'])]
    public function getUsers(UserRepository $userRepository, SerializerInterface $serializer, UserService $userService): JsonResponse
    {
        $users = $userRepository->findAll();

        foreach ($users as $user) {
            $user->age = $userService->calculateAge($user);
        }

        $data = $serializer->serialize($users, 'json', [
            'groups' => 'user:read',
            DateTimeNormalizer::FORMAT_KEY => 'Y-m-d',
        ]);

        return new JsonResponse($data, 200, [], true);
    }

    #[Route("/api/users/{id}", name: "delete_user", methods: ["DELETE"])]
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


    #[Route('/api/users/add', name: 'add_user', methods: ['POST'])]
    public function addUser(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $user = new User();
        $user->setNom($data['nom']);
        $user->setPrenom($data['prenom']);
        $user->setEmail($data['email']);
        $user->setAdresse($data['adresse']);
        $user->setTel($data['tel']);
        $user->setBirthDate(new \DateTime($data['birthDate']));

        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse(['status' => 'User created'], 201);
    }
}
