<?php

namespace AmisPhp\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BuildCommand extends BaseCommand
{
    protected static $defaultName = 'build';
    protected static $defaultDescription = 'Build amis schemas';

    protected function configure()
    {
        $this->setHelp('This command builds all amis schemas');
    }

    protected function handle(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Building amis schemas...');
        // 这里可以添加实际的构建逻辑
        $output->writeln('<info>Build completed!</info>');
    }
}