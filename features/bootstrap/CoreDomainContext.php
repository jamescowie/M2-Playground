<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class CoreDomainContext implements Context, SnippetAcceptingContext
{
    private $helloWorldModule;

    private $output;

    public function __construct()
    {
        $this->helloWorldModule = new \Jcowie\HelloWorld\Model\HelloWorld();
    }

    /**
     * @Given My module exists
     */
    public function myModuleExists()
    {
        return true;
    }

    /**
     * @When I run the Hello World module
     */
    public function iRunTheHelloWorldModule()
    {
        $this->output = $this->helloWorldModule->sayHello();
    }

    /**
     * @Then I should be presented with :argument
     */
    public function iShouldBePresentedWith($argument)
    {
        expect($this->output)->toBe($argument);
    }
}
