<?php

namespace JacobSantos\Infrastructure\Bowling;

/**
 *
 */
class Score implements Total
{
    private const SPARE = '/';
    private const STRIKE = 'x';

    /**
     * @inheritDoc
     */
    public function score(string $bowls): int
    {
        $score = [];

        $frames = explode(' ', strtolower($bowls));

        foreach ($frames as $frame)
        {
            $currentScore = 0;
            $attempts = str_split($frame, 1);
            foreach ($attempts as $attempt)
            {
                if (is_numeric($attempt))
                {
                    $currentScore += (int)$attempt;
                }
                else if ($attempt === self::STRIKE)
                {
                    $currentScore = 10;
                }
                else if ($attempt === self::SPARE)
                {
                    $currentScore += 10;
                }
            }
            $score[] = $currentScore;
        }

        return array_sum($score);
    }
}