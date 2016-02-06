<?php
namespace Jcowie\HelloWorldModule\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

class GeneratorCommand extends Command
{
    /** @var \Jcowie\HelloWorld\Model\HelloWorld $helloWorldModel */
    private $helloWorldModel;

    /**
     * GeneratorCommand constructor.
     * @param \Jcowie\HelloWorld\Model\HelloWorld $helloWorld
     */
    public function __construct(\Jcowie\HelloWorld\Model\HelloWorld $helloWorld)
    {
        $this->helloWorldModel = $helloWorld;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('jcowie:helloworld');
        $this->setDescription('Hello World');

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->helloWorldModel->sayHello());
    }
}
