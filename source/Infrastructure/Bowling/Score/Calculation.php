<?php

namespace JacobSantos\Infrastructure\Bowling\Score;

use JacobSantos\Infrastructure\Bowling\Bowl\Frame;
use JacobSantos\Infrastructure\Bowling\Frame\Collection;

class Calculation implements Calculator
{

    /**
     * @param Frame[] $frames
     * @return int
     */
    public function calculate(array $frames): int
    {
        $total = 0;
        foreach ($frames as $at => $frame) {
            if ($this->isStrike($frame)) {
                if (isset($frames[$at+2])) {
                    $total += $this->score($frames[$at+2]);
                }
                if (isset($frames[$at+1])) {
                    $total += $this->score($frames[$at+1]);
                }
                $total += $this->score($frame);
            } else if ($this->isSpare($frame)) {
                if (isset($frames[$at+1])) {
                    $total += $this->score($frames[$at+1]);
                }
                $total += $this->score($frame);
            } else {
                $total += $this->score($frame);
            }
        }

        return $total;
    }

    /**
     * @param Frame $frame
     * @return int
     */
    protected function score(Frame $frame): int
    {
        $first = $frame->first();
        $second = $frame->second();
        return $first + $second;
    }

    /**
     * @param Frame $frame
     * @return bool
     */
    protected function isStrike(Frame $frame): bool
    {
        return $frame->first() === 10 && $frame->second() === 0;
    }

    /**
     * @param Frame $frame
     * @return bool
     */
    protected function isSpare(Frame $frame): bool
    {
        return ( $frame->first() + $frame->second()) === 10;
    }
}