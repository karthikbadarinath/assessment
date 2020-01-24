<?php
declare(strict_types=1);

namespace Assessment;

use Assessment\Contract\Organizer;
use Tightenco\Collect\Support\Collection;

class SolutionTwo extends Evaluator implements Organizer
{
    protected Collection $_numbers;

    private function __construct(array $numbers)
    {
        $this->_numbers = collect($numbers);
    }

    public static function get(array $numbers): Organizer
    {
        return new static($numbers);
    }

    public function set(): Organizer
    {
        $this->_numbers = $this->_numbers->map(fn ($number) => $this->_evaluate($number));

        return $this;
    }

    public function go(): Collection
    {
        return $this->_numbers->map(fn ($number) => $this->_getResult($number));
    }
}
