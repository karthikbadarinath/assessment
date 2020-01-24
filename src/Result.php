<?php
namespace Assessment;

trait Result
{

	/**
	 * @return string JSON String.
	 */
	public function toJson(): string
	{
		return json_encode($this->_result, JSON_PRETTY_PRINT);
	}

	/**
	 * @return array To array.
	 */
	public function toArray(): array
	{
		return $this->_result;
	}

	/**
	 * Prints with specified delimited space.
	 *
	 * @param string $delimiter The char used while printing
	 *
	 * @return string
	 */
	public function implode(string $delimiter): string
	{
		return implode($delimiter, array_values($this->_result));
	}

	/**
	 * Gets the count of array
	 *
	 * @return integer
	 */
	public function count(): int
	{
		return count($this->_result);
	}

}
