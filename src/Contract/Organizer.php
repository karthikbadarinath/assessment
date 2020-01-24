<?php

declare(strict_types=1);

namespace Assessment\Contract;

use Tightenco\Collect\Support\Collection;

interface Organizer
{
    public static function get(array $numbers): Organizer;

    public function set(): Organizer;

    /**
     * @return Organizer|Collection
     */
    public function go();
}
