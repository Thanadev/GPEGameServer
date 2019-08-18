<?php

namespace App\Controller;

use App\Service\RoomService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    /**
     * @Route("/room", name="room")
     * @param Request $request
     * @param RoomService $roomService
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(Request $request, RoomService $roomService)
    {
        $roomService->createRoom();
        $request->query->get('name');

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RoomController.php',
        ]);
    }
}
