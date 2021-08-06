<?php

namespace JacobSantos\Infrastructure\Bowling\Score;

use JacobSantos\Infrastructure\Bowling\Bowl\Frame;

/**
 *
 */
interface Calculator
{
    /**
     * @param Frame[] $frames
     * @return int
     */
    public function calculate(array $frames): int;
}