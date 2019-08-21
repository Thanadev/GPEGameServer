<?php

namespace App\Controller;

use App\Service\RoomService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    const RESPONSE_OK = 'ok';

    /**
     * @Route("/room", name="room")
     * @param Request $request
     * @param RoomService $roomService
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(Request $request, RoomService $roomService)
    {
        $gamemode = $request->query->get('gamemode');

        $room = $roomService->createRoom($gamemode);

        $roomStatus = static::RESPONSE_OK;

        return $this->json([
            'status' => $roomStatus,
            'port' => $room->getPort(),
        ]);
    }
}
