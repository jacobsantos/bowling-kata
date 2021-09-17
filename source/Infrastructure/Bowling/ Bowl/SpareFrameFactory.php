<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

class SpareFrameFactory implements FrameFactory
{

    /**
     * @inheritDoc
     */
    public function create(int $maxScore): Frame
    {
        try {
            $first = random_int(0, $maxScore - 1);
        } catch (\Exception $exception) {
            $first = 0;
        }
        $second = $maxScore - $first;
        return new Bowl($first, $second);
    }
}