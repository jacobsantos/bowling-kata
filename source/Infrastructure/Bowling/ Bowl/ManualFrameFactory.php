<?php

namespace JacobSantos\Infrastructure\Bowling\Bowl;

class ManualFrameFactory implements FrameFactory
{
    /**
     * @var int
     */
    protected int $_first;

    /**
     * @var int
     */
    protected int $_second;

    /**
     * @param int $first
     * @param int $second
     */
    public function __construct(int $first, int $second)
    {
        $this->_first = $first;
        $this->_second = $second;
    }

    /**
     * @inheritDoc
     */
    public function create(int $maxScore): Frame
    {
        return new Bowl($this->_first, $this->_second);
    }
}