<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

/**
 *
 */
class Factory
{
    /**
     * @return FrameFactory
     */
    public function random(): FrameFactory
    {
        return new RandomFrameFactory();
    }

    /**
     * @return FrameFactory
     */
    public function strike(): FrameFactory
    {
        return new StrikeFrameFactory();
    }

    /**
     * @return FrameFactory
     */
    public function spare(): FrameFactory
    {
        return new SpareFrameFactory();
    }

    /**
     * @param int $first
     * @param int $second
     * @return FrameFactory
     */
    public function attempt(int $first, int $second): FrameFactory
    {
        return new ManualFrameFactory($first, $second);
    }
}
