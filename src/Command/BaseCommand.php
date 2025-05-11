<?php

namespace AmisPhp\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->handle($input, $output);
        return Command::SUCCESS;
    }

    abstract protected function handle(InputInterface $input, OutputInterface $output);
}