<?php
namespace Assessment;

abstract class Evaluator
{

    public const FOR_BOTH   = 15;
    public const WITH_FIVE  = 5;
    public const WITH_THREE = 3;

    public const ASSESS_NUMBERS = [
        self::FOR_BOTH,
        self::WITH_FIVE,
        self::WITH_THREE,
    ];

    /**
     * This method assess the given number with the numbers to evaluate.
     *
     * @param int $number The given number.
     *
     * @return integer|null
     */
    protected function evaluate(int $number): int
    {
        $firstDivisibleNumber = current(array_filter(self::ASSESS_NUMBERS, function ($divisor) use ($number) {
            return ($number % $divisor == 0);
        }));

        if (!empty($firstDivisibleNumber)) {
            $number = $firstDivisibleNumber;
        }

        return $number;
    }

    /**
     * Determines output result.
     *
     * @param integer $number The number which needs to be converted to string
     *
     * @return string|number
     */
    protected function getResult(int $number)
    {
        $output = null;
        switch ($number) {
            case self::FOR_BOTH:
                $output = 'Linianos';
                break;
            case self::WITH_FIVE:
                $output = 'IT';
                break;
            case self::WITH_THREE:
                $output = 'Linio';
                break;
            default:
                $output = $number;
                break;
        }

        return $output;
    }

}

