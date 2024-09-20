<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;


class PossessionController extends AbstractController
{
    #[Route('/api/users/{id}/details', name: 'api_get_user_with_possessions', methods: ['GET'])]
    public function getUserWithPossessions(int $id, UserRepository $userRepository, SerializerInterface $serializer): JsonResponse
    {
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['error' => 'User not found'], 404);
        }

        // Sérialisation de l'utilisateur avec ses possessions
        $data = $serializer->serialize($user, 'json', [
            'groups' => 'user:read',
            DateTimeNormalizer::FORMAT_KEY => 'Y-m-d', 
        ]);
        return new JsonResponse($data, 200, [], true);
    }

    #[Route('/api/users/{id}/possessions', name: 'api_user_possessions', methods: ['GET'])]
    public function getUserPossessions(int $id, UserRepository $userRepository, SerializerInterface $serializer): JsonResponse
    {
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['error' => 'User not found'], 404);
        }

        // Récupération et sérialisation des possessions
        $possessions = $user->getPossessions();
        $data = $serializer->serialize($possessions, 'json', ['groups' => 'user:read']);

        return new JsonResponse($data, 200, [], true);
    }
}
