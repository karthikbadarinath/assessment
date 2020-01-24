<?php
namespace Assessment\Contract;

interface Organizer
{

    /**
     * Stores the data.
     *
     * @param array $numbers The number for which we need to access
     *
     * @return self
     */
    public function get(array $numbers): self;

    /**
     * Assess the data and prints which number belongs where
     *
     * @return self
     */
    public function set(): self;

    /**
     * Prints the data in order
     *
     * @return self|Collection
     */
    public function go();

}
