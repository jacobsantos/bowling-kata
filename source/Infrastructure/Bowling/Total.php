<?php

namespace JacobSantos\Infrastructure\Bowling;

/**
 *
 */
interface Total
{
    /**
     * @param string $bowls
     * @return int
     */
    public function score(string $bowls): int;
}