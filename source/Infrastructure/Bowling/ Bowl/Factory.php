<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

/**
 *
 */
class Factory
{
    private const MAX_SCORE = 10;

    /**
     * @return Frame
     * @throws \Exception
     */
    public function random(): Frame
    {
        $first = random_int(0, self::MAX_SCORE);
        $second = 0;
        if ($first < self::MAX_SCORE) {
            $second = random_int(0, self::MAX_SCORE - $first);
        }
        return new Bowl($first, $second);
    }

    /**
     * @return Frame
     */
    public function strike(): Frame
    {
        return new Bowl(self::MAX_SCORE, 0);
    }

    /**
     * @return Frame
     * @throws \Exception
     */
    public function spare(): Frame
    {
        $first = random_int(0, self::MAX_SCORE - 1);
        $second = self::MAX_SCORE - $first;
        return new Bowl($first, $second);
    }

    /**
     * @param int $first
     * @param int $second
     * @return Frame
     */
    public function attempt(int $first, int $second): Frame
    {
        return new Bowl($first, $second);
    }
}
