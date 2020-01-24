<?php
namespace Assessment\Test;

trait CommonTestTrait
{
    /**
     * Test Result Count
     *
     * @param integer $endNumber The end number in a range
     *
     * @covers \Assessment\SolutionOne::get,\Assessment\SolutionOne::set,\Assessment\SolutionOne::go
     * @dataProvider providerTestResultCount
     *
     * @return void
     */
    public function testResultCount(int $endNumber)
    {
        $numbers = range(1, $endNumber);
        $result  = $this->performAction($numbers);

        // Checking if the count matches
        $this->assertEquals($endNumber, $result->count());

        // Checking if the result array matches count
        $this->assertCount($endNumber, $result->toArray());
    }

    /**
     * Provider for testResultCount
     *
     * @return array
     */
    public function providerTestResultCount()
    {
        // Key is the desc. of the test that we are conducting, value is the params that we are passing to the calling test

        return [
            'Check if range of number 1-10 returns 10 results as output' => [10], // 10 is the endNumber in range
            'Check if range of number 1-65 returns 65 results as output' => [65], // 65 is the endNumber in range
        ];
    }

    /**
     * Tests the actual result data
     *
     * @return void
     */
    public function testResult()
    {
        $numbers  = range(1, 20);
        $expected = [1, 2, 'Linio', 4, 'IT', 'Linio', 7, 8, 'Linio', 'IT', 11, 'Linio', 13, 14, 'Linianos', 16, 17, 'Linio', 19, 'IT'];
        $actual   = $this->performAction($numbers)->toArray();

        $this->assertEquals($expected, $actual);
    }

}