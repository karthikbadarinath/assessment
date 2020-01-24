<?php
namespace Assessment;

use Assessment\Contract\Organizer;
use Tightenco\Collect\Support\Collection;

class SolutionTwo extends Evaluator implements Organizer
{

    /**
     * @var Collection Of numbers.
     */
    protected $_numbers;

    /**
     * @var Collection Of data that is ready to print.
     */
    protected $_result;

    /**
     * Construct of the class.
     */
    private function __construct(array $numbers)
    {
        $this->_numbers = collect($numbers);
    }

    /**
     * Stores the prerequisite data.
     *
     * @param array $numbers The number for which we need to access.
     *
     * @return self
     */
    public function get(array $numbers): Organizer
    {
        return new static($numbers);
    }

    /**
     * Assess the data and prints which number belongs where.
     *
     * @return self
     */
    public function set(): Organizer
    {
        $this->_number = $this->_numbers->mapWithKeys(function ($number) {
            return [$number => $this->evaluate($number)];
        });

        return $this;
    }

    /**
     * Prints the data in order.
     *
     * @return Collection
     */
    public function go(): Collection
    {
        return $this->_number->map(function ($number) {
            return $this->getResult($number);
        })->values();
    }

}
