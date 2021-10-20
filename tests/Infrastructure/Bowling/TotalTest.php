<?php

namespace JacobSantosTest\Infrastructure\Bowling;

use JacobSantos\Infrastructure\Bowling\Score;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class TotalTest extends TestCase
{
    /**
     * @return Score
     */
    protected function _newSUT(): Score
    {
        return new Score();
    }

    /**
     *
     */
    public function testStrikeScoreIs300()
    {
        $sut = $this->_newSUT();

        $result = $sut->score('X X X X X X X X X X X X');

        $this->assertEquals(300, $result);
    }

    /**
     *
     */
    public function testMissesScoreIs90()
    {
        $sut = $this->_newSUT();

        $result = $sut->score('9- 9- 9- 9- 9- 9- 9- 9- 9- 9-');

        $this->assertEquals(90, $result);
    }

    /**
     *
     */
    public function testSparesScoreIs150()
    {
        $sut = $this->_newSUT();

        $result = $sut->score('5/ 5/ 5/ 5/ 5/ 5/ 5/ 5/ 5/ 5/5');

        $this->assertEquals(150, $result);
    }
}