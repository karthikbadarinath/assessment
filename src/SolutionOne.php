<?php
namespace Assessment;

use Assessment\Contract\Organizer;

class SolutionOne extends Evaluator implements Organizer
{
    use Result;

    /**
     * @var array Of numbers.
     */
    protected $_numbers;

    /**
     * @var array Of results.
     */
    protected $_result;

    /**
     * Construct of the class.
     */
    private function __construct(array $numbers)
    {
        $this->_numbers = $numbers;
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
        $this->_numbers = array_column(array_map(function ($number) {
            return [
                'number' => $number,
                'result' => $this->evaluate($number),
            ];
        }, $this->_numbers), 'result', 'number');


        return $this;
    }

    /**
     * Prints the data in order.
     *
     * @return self
     */
    public function go(): Organizer
    {
        $this->_result = array_values(array_map(function ($number) {
            return $this->getResult($number);
        }, array_values($this->_numbers)));

        return $this;
    }

}
