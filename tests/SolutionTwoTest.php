<?php
namespace Assessment\Test;

use Assessment\SolutionTwo;

class SolutionTwoTest extends \Codeception\Test\Unit
{
    use CommonTestTrait;

    /**
     * Callback for before execution of each method.
     *
     * @return void
     */
    protected function _before()
    {
    }

    /**
     * Callback for after execution of each method.
     *
     * @return void
     */
    protected function _after()
    {
    }

    /**
     * Performs the required operation for test and returns data for assertions
     *
     * @param array $numbers The numbers to perform action
     *
     * @return Collection
     */
    public function performAction(array $numbers)
    {
        return SolutionTwo::get($numbers)->set()->go();
    }

}