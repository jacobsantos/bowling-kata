<?php

namespace JacobSantos\Infrastructure\Bowling;

use JacobSantos\Infrastructure\Bowling\Bowl\Factory;
use JacobSantos\Infrastructure\Bowling\Score\Calculator;

/**
 *
 */
class Bowling implements Game
{
    protected Calculator $_calculator;

    public function __construct(Calculator $calculator)
    {
        $this->_calculator = $calculator;
    }

    /**
     * @param int $playFrames
     * @return mixed|void
     */
    public function play(int $playFrames = 10)
    {
        $factory = new Factory();
        $frames = [];
        foreach (range(0, $playFrames) as $turn) {
            $frames[] = $factory->random();
        }

    }
}