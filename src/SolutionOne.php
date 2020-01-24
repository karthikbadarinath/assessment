<?php

declare(strict_types=1);

namespace Assessment;

use Assessment\Contract\Organizer;

class SolutionOne extends Evaluator implements Organizer
{
    use Result;

    protected array $_numbers;

    protected array $_result;

    private function __construct(array $numbers)
    {
        $this->_numbers = $numbers;
    }

    public static function get(array $numbers): Organizer
    {
        return new static($numbers);
    }

    public function set(): Organizer
    {
        $this->_numbers = array_map([$this, '_evaluate'], $this->_numbers);

        return $this;
    }

    public function go(): Organizer
    {
        $this->_result = array_map([$this, '_getResult'], $this->_numbers);

        return $this;
    }
}
