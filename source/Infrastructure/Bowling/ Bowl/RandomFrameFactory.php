<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

/**
 *
 */
class RandomFrameFactory implements FrameFactory
{

    /**
     * @param int $maxScore
     * @return Frame
     * @throws \Exception
     */
    public function create(int $maxScore): Frame
    {
        try {
            $first = random_int(0, $maxScore - 1);
        } catch (\Exception $exception) {
            $first = 0;
        }
        $first = random_int(0, $maxScore);
        $second = 0;
        if ($first < $maxScore) {
            try {
                $second = random_int(0, $maxScore - $first);
            } catch (\Exception $exception) {
                $second = 0;
            }
        }
        return new Bowl($first, $second);
    }
}