<?php

namespace App\Controller;

use App\Repository\PossessionRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PossessionController extends AbstractController
{
    #[Route('user/{id}/possession', name: 'possession')]
    public function showPossessions(int $id, UserRepository $userRepository,PossessionRepository $repository,): Response
    {

        $user = $userRepository->find($id);
        $possession = $repository->findBy(["user" => $user]);

        return $this->render('possession/index.html.twig', [
            "user" => $user,
            "possession" => $possession
        ]);
    }



}
