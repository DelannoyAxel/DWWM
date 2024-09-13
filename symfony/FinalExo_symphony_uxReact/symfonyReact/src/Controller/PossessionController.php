<?php


namespace App\Controller;

use App\Repository\PossessionRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PossessionController extends AbstractController
{
    #[Route('/api/user/{id}/possessions', name: 'api_possessions', methods: ['GET'])]
    public function getPossessions(int $id, UserRepository $userRepository, PossessionRepository $repository): JsonResponse
    {
        $user = $userRepository->find($id);

        if (!$user) {
            return new JsonResponse(['error' => 'User not found'], 404);
        }

        $possessions = $repository->findBy(['user' => $user]);

        $userData = [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'possessions' => array_map(function ($possession) {
                return [
                    'id' => $possession->getId(),
                    'type' => $possession->getType(),
                    'description' => $possession->getDescription(),
                ];
            }, $possessions)
        ];

        return new JsonResponse($userData);
    }
}
