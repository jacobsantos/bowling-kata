<?php

namespace JacobSantos\Infrastructure\Bowling;

use JacobSantos\Infrastructure\Bowling\Bowl\FrameFactory;
use JacobSantos\Infrastructure\Bowling\Score\Calculator;

/**
 *
 */
class Bowling implements Game
{
    public const MAX_SCORE = 10;

    protected Calculator $_calculator;

    protected FrameFactory $_frameFactory;

    public function __construct(Calculator $calculator, FrameFactory $frameFactory)
    {
        $this->_calculator = $calculator;
        $this->_frameFactory = $frameFactory;
    }

    /**
     * @param int $playFrames
     * @return mixed|void
     */
    public function play(int $playFrames = 10)
    {
        $frames = [];
        foreach (range(0, $playFrames) as $turn) {
            $frames[] = $this->_frameFactory->create(self::MAX_SCORE);
        }

    }
}