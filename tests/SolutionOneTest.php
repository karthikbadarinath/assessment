<?php

declare(strict_types=1);

namespace Assessment\Test;

use Assessment\Contract\Organizer;
use Assessment\SolutionOne;

/**
 * @coversDefaultClass SolutionOne
 */
class SolutionOneTest extends \Codeception\Test\Unit
{
    use CommonTestTrait;

    public function performActionWith(array $numbers): Organizer
    {
        return SolutionOne::get($numbers)->set()->go();
    }
}
