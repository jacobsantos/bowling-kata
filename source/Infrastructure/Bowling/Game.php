<?php

namespace JacobSantos\Infrastructure\Bowling;

interface Game
{
    /**
     * @param int $playFrames
     * @return mixed
     */
    public function play(int $playFrames = 10);
}