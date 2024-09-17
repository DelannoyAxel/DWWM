<?php


namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class PossessionController extends AbstractController
{
    #[Route("/api/users/{id}/possessions", name: "get_user_possessions", methods: ["GET"])]
    public function getUserPossessions($id, EntityManagerInterface $em, SerializerInterface $serializer): JsonResponse
    {
        $user = $em->getRepository(User::class)->find($id);
        if (!$user) {
            return new JsonResponse(['error' => 'User not found'], 404);
        }

        $possessions = $user->getPossessions();

        $jsonData = $serializer->serialize($possessions, 'json', ['groups' => 'possession:read']);
        return new JsonResponse($jsonData, 200, [], true);
    }
}
