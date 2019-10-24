<?php

namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CreateRoomCommand
 * @package App\Command
 */
class CreateRoomCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:room:create';

    /**
     * CreateRoomCommand constructor.
     * @param bool $requirePassword
     */
    public function __construct(bool $requirePassword = false)
    {
        $this->requirePassword = $requirePassword;

        parent::__construct();
    }

    protected function configure()
    {
        $this->addArgument('gamemode', InputArgument::REQUIRED, 'The gamemode');
        $this->addArgument('port', InputArgument::REQUIRED, 'The port of the room');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Starting a new server room');

        $gameMode = $input->getArgument('gamemode');
        $port = $input->getArgument('port');

        $gamePath = $_ENV['GAME_PATH'];
        $launchOptions = ' -gamemode ' . strval($gameMode) . ' -roomport ' . $port;

        exec($gamePath . $launchOptions);
    }
}