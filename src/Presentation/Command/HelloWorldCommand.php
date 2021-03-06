<?php

namespace App\Presentation\Command;

use App\Module\HelloWorld\HelloWorldService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'hello-world',
    description: 'Add a short description for your command',
)]
class HelloWorldCommand extends Command
{


    private HelloWorldService $helloWorldService;


    public function __construct(HelloWorldService $useCase)
    {
        $this->helloWorldService = $useCase;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('provider', null, InputOption::VALUE_OPTIONAL, 'Data Provider',  null);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('provider')) {
            // ...
        }

        $io->success($this->helloWorldService->sayHelloWorld($input->getOption('provider')));

        return Command::SUCCESS;
    }
}
