<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
   require_once 'Calculator.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        if (!isset($this->calculator)) {
            $this->calculator = new Calculator();
        }
    }

    /**
     * @Given /^I have entered (\d+) into the calculator$/
     */
    public function iHaveEnteredIntoTheCalculator($argument1)
    {
        $this->calculator->push($argument1);
    }

    /**
     * @When /^I press add$/
     */
    public function iPressAdd()
    {
        $this->calculator->add();
    }

    /**
     * @Then /^the result should be (\d+) on the screen$/
     */
    public function theResultShouldBeOnTheScreen($argument1)
    {
        assertEquals($argument1, $this->calculator->result());
    }
}
