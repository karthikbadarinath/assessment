<?php

declare(strict_types=1);

namespace Assessment;

abstract class Evaluator
{
    public const FOR_BOTH   = 15;
    public const WITH_FIVE  = 5;
    public const WITH_THREE = 3;

    public const OUTPUT_FOR_BOTH = 'Linianos';
    public const OUTPUT_FOR_FIVE = 'IT';
    public const OUTPUT_FOR_THREE = 'Linio';

    public const ASSESS_NUMBERS = [
        self::FOR_BOTH,
        self::WITH_FIVE,
        self::WITH_THREE,
    ];

    protected function _evaluate(int $number): int
    {
        $allDivisibleValues = array_filter(self::ASSESS_NUMBERS, fn ($divisor) => ($number % $divisor == 0));
        $firstDivisibleNumber = current($allDivisibleValues);
        if (!empty($firstDivisibleNumber)) {
            $number = $firstDivisibleNumber;
        }

        return $number;
    }

    /**
     * @return string|int
     */
    protected function _getResult(int $number)
    {
        $output = null;
        switch ($number) {
            case self::FOR_BOTH:
                $output = self::OUTPUT_FOR_BOTH;
                break;
            case self::WITH_FIVE:
                $output = self::OUTPUT_FOR_FIVE;
                break;
            case self::WITH_THREE:
                $output = self::OUTPUT_FOR_THREE;
                break;
            default:
                $output = $number;
                break;
        }

        return $output;
    }
}
