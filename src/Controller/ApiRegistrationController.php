<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class ApiRegistrationController extends AbstractController
{


    public function __construct(private readonly UserRepository $userRepository)
    {
    }

    #[Route('/api/registration', name: 'api_registration', methods: ['POST'])]
    public function index(Request $request,): JsonResponse
    {
        $payload = json_decode($request->getContent(), true);
        $message = $this->userRepository->createUser($payload['username'], $payload['email'], $payload['password']);
        return $this->json([
            'message' => $message,
        ]);
    }
}
