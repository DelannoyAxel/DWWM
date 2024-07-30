<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class VinylController
{

    #[Route('/')]

    public function test(): Response
    {
        return new Response('Yo man');
    }
}
