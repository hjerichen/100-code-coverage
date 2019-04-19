<?php


namespace HJerichen\OneHundredCodeCoverage;


/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class ShorthandIfElse
{
    /**
     * @param int $a
     * @return int
     */
    public function calculate(int $a): int
    {
        return $a > 0 ? $a : -$a;
    }
}