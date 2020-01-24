<?php

declare(strict_types=1);

namespace Assessment\Test;

use Assessment\Evaluator;

trait CommonTestTrait
{
    /**
     * @dataProvider providerTestResultCount
     */
    public function testResultCount(int $endNumber): void
    {
        $numbers = range(1, $endNumber);
        $result  = $this->performActionWith($numbers);

        $this->assertEquals($endNumber, $result->count());
        $this->assertCount($endNumber, $result->toArray());
    }

    public function providerTestResultCount(): array
    {
        return [
            'Check if range of number 1-10 returns 10 results as output' => ['endNumber' => 10],
            'Check if range of number 1-65 returns 65 results as output' => ['endNumber' => 65],
        ];
    }

    public function testResult(): void
    {
        $numbers  = range(1, 20);
        $expected = [
            1, 
            2, 
            Evaluator::OUTPUT_FOR_THREE, 
            4, 
            Evaluator::OUTPUT_FOR_FIVE,
            Evaluator::OUTPUT_FOR_THREE, 
            7, 
            8, 
            Evaluator::OUTPUT_FOR_THREE, 
            Evaluator::OUTPUT_FOR_FIVE, 
            11, 
            Evaluator::OUTPUT_FOR_THREE, 
            13, 
            14, 
            Evaluator::OUTPUT_FOR_BOTH,
            16, 
            17, 
            Evaluator::OUTPUT_FOR_THREE, 
            19, 
            Evaluator::OUTPUT_FOR_FIVE
        ];

        $actual = $this->performActionWith($numbers)->toArray();
        $this->assertEquals($expected, $actual);
    }
}
