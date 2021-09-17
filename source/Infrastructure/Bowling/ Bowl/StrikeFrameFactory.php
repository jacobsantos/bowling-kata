<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

class StrikeFrameFactory implements FrameFactory
{

    /**
     * @inheritDoc
     */
    public function create(int $maxScore): Frame
    {
        return new Bowl($maxScore, 0);
    }
}