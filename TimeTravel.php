<?php
/**
 * Created by PhpStorm.
 * User: wilder17
 * Date: 19/06/18
 * Time: 14:05
 */

class TimeTravel
{
    private $start;

    private $end;

    /**
     * @return string
     */
    public function getTravelInfo() : string
    {
        return $this->getStart()->diff($this->getEnd())->format('Il y a %Y années, %m mois, %d jours, %H heures, %i minutes et %s secondes entre les deux dates');
    }

    /**
     * @param DateInterval $interval
     * @return DateTime
     */
    public function findDate(DateInterval $interval) : DateTime
    {
        $startDate = clone $this->getStart();
        return $startDate->sub($interval);
    }

    public function backToFutureStepByStep(DatePeriod $step) : array
    {
        $steps = [];
        foreach ($step as $date) {
            $steps[] = $date->format('M j Y A h:i');
        }
        return $steps;
    }

    /**
     * TimeTravel constructor.
     */
    public function __construct(DateTime $startDate, DateTime $endDate)
    {
        $this->start = $startDate;
        $this->end = $endDate;
    }

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @param DateTime $start
     */
    public function setStart(DateTime $start): void
    {
        $this->start = $start;
    }

    /**
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * @param DateTime $end
     */
    public function setEnd(DateTime $end): void
    {
        $this->end = $end;
    }
}
