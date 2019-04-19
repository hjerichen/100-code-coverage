<?php


namespace HJerichen\OneHundredCodeCoverage;


/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class UselessAssert
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}