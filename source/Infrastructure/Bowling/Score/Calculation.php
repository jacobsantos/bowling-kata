<?php

namespace JacobSantos\Infrastructure\Bowling\Score;

use JacobSantos\Infrastructure\Bowling\Bowl\Frame;

/**
 *
 */
class Calculation implements Calculator
{

    protected Result $_result;

    public function __construct(Result $result)
    {
        $this->_result = $result;
    }

    /**
     * @param Frame[] $frames
     * @return int
     */
    public function calculate(array $frames): int
    {
        $total = 0;
        foreach ($frames as $at => $frame) {
            if ($this->_result->isStrike($frame)) {
                if (isset($frames[$at+2])) {
                    $total += $this->_result->calculate($frames[$at+2]);
                }
                if (isset($frames[$at+1])) {
                    $total += $this->_result->calculate($frames[$at+1]);
                }
                $total += $this->_result->calculate($frame);
            } else if ($this->_result->isSpare($frame)) {
                if (isset($frames[$at+1])) {
                    $total += $this->_result->calculate($frames[$at+1]);
                }
                $total += $this->_result->calculate($frame);
            } else {
                $total += $this->_result->calculate($frame);
            }
        }

        return $total;
    }
}