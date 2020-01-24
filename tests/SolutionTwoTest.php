<?php

declare(strict_types=1);

namespace Assessment\Test;

use Assessment\SolutionTwo;
use Tightenco\Collect\Support\Collection;

/**
 * @coversDefaultClass SolutionTwo
 */
class SolutionTwoTest extends \Codeception\Test\Unit
{
    use CommonTestTrait;

    public function performActionWith(array $numbers): Collection
    {
        return SolutionTwo::get($numbers)->set()->go();
    }
}
