<?php

namespace JacobSantos\Infrastructure\Bowling\Score;

use JacobSantos\Infrastructure\Bowling\Bowl\Frame;

/**
 *
 */
class Score implements Result
{
    /**
     * @param Frame $frame
     * @return int
     */
    public function calculate(Frame $frame): int
    {
        $first = $frame->first();
        $second = $frame->second();
        return $first + $second;
    }

    /**
     * @param Frame $frame
     * @return bool
     */
    public function isStrike(Frame $frame): bool
    {
        return $frame->first() === 10 && $frame->second() === 0;
    }

    /**
     * @param Frame $frame
     * @return bool
     */
    public function isSpare(Frame $frame): bool
    {
        return ( $frame->first() + $frame->second()) === 10;
    }
}