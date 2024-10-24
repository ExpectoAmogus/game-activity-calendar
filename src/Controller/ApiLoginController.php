<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class ApiLoginController extends AbstractController
{
    #[Route('/api/login', name: 'api_login', methods: ['POST'])]
    public function index(Request $request): JsonResponse
    {
//        if (null === $user) {
//            return $this->json([
//                'message' => 'missing credentials',
//            ], Response::HTTP_UNAUTHORIZED);
//        }


        return new JsonResponse(['token' => 'message'], 200);
    }
}
