<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

/**
 * Defines application features from the specific context.
 */
class CliContext implements Context, SnippetAcceptingContext
{
    private $output;

    /**
     * @Given My module exists
     */
    public function myModuleExists()
    {
        if (file_exists("src/Jcowie")) {
            return true;
        } else {
            throw new PendingException("Folder not found for module");
        }
    }

    /**
     * @When I run :command from the command line
     */
    public function iRunFromTheCommandLine($command)
    {
        $process = new Process(getcwd() . "/".  $command);
        $process->run();

        $this->output = $process->getOutput();
    }

    /**
     * @Then I should see :output returned
     */
    public function iShouldSeeReturned($output)
    {
        expect(trim($this->output))->toBe($output);
    }
}
