<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

interface Frame
{
    /**
     * @return int
     */
    public function first(): int;

    /**
     * @return int
     */
    public function second(): int;

    /**
     * @return bool
     */
    public function isSpare(): bool;

    /**
     * @return bool
     */
    public function isStrike(): bool;
}