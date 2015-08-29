<?php
namespace Pulsestorm\TutorialInstanceObjects\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pulsestorm\TutorialInstanceObjects\Model\ExampleFactory;

class Testbed extends Command
{
    protected $exampleFactory;
    public function __construct(ExampleFactory $example)
    {
        $this->exampleFactory = $example;
        return parent::__construct();
    }
    
    protected function configure()
    {
        $this->setName("ps:tutorial-instance-objects");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World"); 
        $output->writeln(get_class($this->exampleFactory)); 
        
        $example = $this->exampleFactory->create();
        $output->writeln(get_class($example)); 
    }
} 