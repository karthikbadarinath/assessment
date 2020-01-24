<?php
declare(strict_types=1);

require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Assessment\SolutionOne;
use Assessment\SolutionTwo;

$numbers = range(1, 100);

// Solution 1, the standard PHP way
// Note: The below mentioned implode, toArray, count are all
// using trait defined by me. Also refer Solution 2 below
echo '<p><b>Solution 1</b></p>';
pr(SolutionOne::get($numbers)->set()->go()->toJson());

// pr(SolutionOne::get($numbers)->set()->go()->implode('<br>'));
// pr(SolutionOne::get($numbers)->set()->go()->implode(PHP_EOL));
// pr(SolutionOne::get($numbers)->set()->go()->implode(', '));
// pr(SolutionOne::get($numbers)->set()->go()->toArray());
// pr(SolutionOne::get($numbers)->set()->go()->count());

// Solution 2, using vendor library called Tightenco\Collection
// Note: The below mentioned implode, toArray, count are all
// part of vendor library and is not using trait defined
echo '<p><b>Solution 2</b></p>';
pr(SolutionTwo::get($numbers)->set()->go()->toJson());

// pr(SolutionTwo::get($numbers)->set()->go()->implode('<br>'));
// pr(SolutionTwo::get($numbers)->set()->go()->implode(PHP_EOL));
// pr(SolutionTwo::get($numbers)->set()->go()->implode(','));
// pr(SolutionTwo::get($numbers)->set()->go()->toArray());
// pr(SolutionTwo::get($numbers)->set()->go()->count());

function pr(array $data): void
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}
