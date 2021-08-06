<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

/**
 *
 */
class Bowl implements Frame
{
    private int $_first;

    private int $_second;

    /**
     * @param int $first
     * @param int $second
     */
    public function __construct(int $first, int $second)
    {
        $this->_first = $first;
        $this->_second = $second;
    }

    /**
     * @return int
     */
    public function first(): int
    {
        return $this->_first;
    }

    /**
     * @return int
     */
    public function second(): int
    {
        return $this->_second;
    }
}