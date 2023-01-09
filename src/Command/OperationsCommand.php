<?php

namespace App\Command;

use App\Service\OperacionesService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:operations',
    description: 'Comando usuado para realizar operaciones',
)]
class OperationsCommand extends Command
{
    private $srv;

    public function __construct(OperacionesService $srv)
    {
        $this->srv = $srv;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('op1', InputArgument::OPTIONAL, 'Primer numero')
            ->addArgument('op2', InputArgument::OPTIONAL, 'Segundo numero')
            ->addArgument('operacion', InputArgument::OPTIONAL, 'Tipo operacion')

        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $op1 = $input->getArgument('op1');
        $op2 = $input->getArgument('op2');
        $operacion = $input->getArgument('operacion');

        $resultado = $this->srv->operar($operacion, $op1, $op2);

        if($resultado !== false && $resultado !== null){
            $io->success('RESULTADO: '.$resultado);
            return Command::SUCCESS;
        }
        else {
            $io->error('Error en la operacion');
            return Command::FAILURE;
        }
    }
}
