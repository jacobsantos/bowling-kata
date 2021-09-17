<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

/**
 *
 */
interface FrameFactory
{
    /**
     * @param int $maxScore
     * @return Frame
     */
    public function create(int $maxScore): Frame;
}