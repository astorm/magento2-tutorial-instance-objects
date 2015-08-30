<?php
namespace Pulsestorm\TutorialInstanceObjects\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pulsestorm\TutorialInstanceObjects\Model\ExampleFactory;
use \Magento\Framework\ObjectManagerInterface;

class Testbed extends Command
{
    // protected $exampleFactory;
    // public function __construct(ExampleFactory $manager)
    // {
    //     $this->exampleFactory = $example;
    //     $this->manager = $manager;
    //     return parent::__construct();
    // }
    
    // protected $manager;            
    // public function __construct(ObjectManagerInterface $manager)
    // {
    //     $this->exampleFactory = $example;
    //     $this->manager = $manager;
    //     return parent::__construct();
    // }
    
    // protected $pageFactory;
    // public function __construct(\Magento\Cms\Model\PageFactory $pageFactory )
    // {
    //     $this->pageFactory = $pageFactory;
    //     parent::__construct();
    // }
    
    protected function configure()
    {
        $this->setName("ps:tutorial-instance-objects");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("You've installed Pulsestorm_TutorialInstanceObjects");
        // $page = $this->pageFactory->create();
        // foreach($page->getCollection() as $item)
        // {
        //     $output->writeln($item->getId() . '::' . $item->getTitle());
        // }
        //         
        // $page = $this->pageFactory->create()->load(1);        
        // var_dump($page->getData());
                
        // $example = $this->exampleFactory->create();
        // $output->writeln(
        //     "You just used a"                . "\n\n    " .
        //     get_class($this->exampleFactory) . "\n\n"     . 
        //     "to create a \n\n    "           . 
        //     get_class($example)              . "\n"); 
        
        
        // $object = 
        //     $this->manager->create('Pulsestorm\TutorialInstanceObjects\Model\Example');
        // $object = 
        //     $this->manager->get('Pulsestorm\TutorialInstanceObjects\Model\Example');

    }
} 