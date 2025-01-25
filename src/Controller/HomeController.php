<?php

declare(strict_types=1);

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
class HomeController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        dd($entityManager->getConnection()->connect());

        return new JsonResponse([
            'message' => 'Hello from Docker',
        ]);
    }
}