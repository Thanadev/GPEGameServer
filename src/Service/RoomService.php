<?php

namespace App\Service;


use App\Entity\RoomEntity;
use Doctrine\ORM\EntityManagerInterface;

class RoomService
{
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function assignPlayerToRoom($gameMode)
    {
        // TODO
        // Check if a room is available for its gameMode
        $rooms = $this->em->getRepository('App:RoomEntity')->findBy(array('gameMode' => $gameMode));
    }

    public function createRoom($gameMode)
    {
        //$port = $this->getFreePort();
        $port = 15937;
        $maxPlayerBySession = intval($_ENV['MAX_PLAYER_NB']);


        $room = new RoomEntity();
        $room->setGameMode($gameMode);
        $room->setPort($port);
        $room->setNbPlayer(0);
        $room->setNbMaxPlayer($maxPlayerBySession);
        $room->setHasStarted(false);

        $this->em->persist($room);
        $this->em->flush();


        exec('php ' . __DIR__ . '/../../bin/console app:room:create ' . $gameMode . ' ' . $port . ' > /dev/null 2>&1');


        return $room;
    }

    protected function getFreePort()
    {
        $port = 15937;

        $rooms = $this->em->getRepository('App:RoomEntity')->findAll();

        foreach ($rooms as $room) {
            /**
             * @var RoomEntity $room
             */
            if ($port == $room->getPort()) {
                $port++;
            }
        }

        return $port;
    }
}