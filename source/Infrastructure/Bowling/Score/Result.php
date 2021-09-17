<?php

namespace JacobSantos\Infrastructure\Bowling\Score;

use JacobSantos\Infrastructure\Bowling\Bowl\Frame;

interface Result
{
    /**
     * @param Frame $frame
     * @return int
     */
    public function calculate(Frame $frame): int;

    /**
     * @param Frame $frame
     * @return bool
     */
    public function isStrike(Frame $frame): bool;

    /**
     * @param Frame $frame
     * @return bool
     */
    public function isSpare(Frame $frame): bool;
}