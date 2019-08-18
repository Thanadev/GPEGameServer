<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thomas
 * Date: 18/08/2019
 * Time: 22:49
 */

namespace App\Service;


class RoomService
{
    public function __construct()
    {
    }

    public function createRoom()
    {
        exec($_ENV['GAME_PATH'] . ' > /dev/null 2>&1 & echo');
    }
}