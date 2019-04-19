<?php


namespace HJerichen\OneHundredCodeCoverage;


/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class SimpleIfStatement
{

    /**
     * @param int $a
     * @return int
     */
    public function calculateSomething(int $a): int
    {
        if ($a < 0) {
            $a += 100;
        }
        return $a + 20;
    }
}