<?php


namespace HJerichen\OneHundredCodeCoverage;


use DateInterval;
use DateTime;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class IfElseStatement
{
    /**
     * @var DateTime
     */
    private $dateTime;

    /**
     * IfElseStatement constructor.
     * @param DateTime $dateTime
     */
    public function __construct(DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @param int $a
     * @param int $b
     * @throws \Exception
     */
    public function execute(int $a, int $b): void
    {
        if ($a > 0 || $b > 0) {
            $interval = 'P2D';
        } else {
            $interval = 'P1D';
        }
        $this->dateTime->add(new DateInterval($interval));
    }
}