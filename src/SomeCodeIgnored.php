<?php


namespace HJerichen\OneHundredCodeCoverage;


use DateInterval;
use DateTime;
use Exception;

/**
 *
 * @author Heiko Jerichen <h.jerichen@nordwest.com>
 */
class SomeCodeIgnored
{
    /**
     * @var DateTime
     */
    private $dateTime;
    /**
     * @var int
     */
    private $addedDays = 0;

    /**
     * SomeCodeIgnored constructor.
     * @param DateTime $dateTime
     */
    public function __construct(DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @param int $days
     * @throws Exception
     */
    public function addDays(int $days): void
    {
        $this->addedDays = $days;
        $this->dateTime->add(new DateInterval("P{$days}D"));
    }

    /**
     * @return int
     */
    public function getAddedDays(): int
    {
        return $this->addedDays;
    }
}