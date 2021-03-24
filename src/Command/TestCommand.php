<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'test:for';

    protected function configure()
    {
        $this->addArgument('max',  InputArgument::REQUIRED, 'Max to iterate');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
      
      for($i=0;$i<=$input->getArgument('max');$i++) {
        echo "$i\n";
      }

      return 1;
    }
}