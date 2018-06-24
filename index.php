<?php
/**
 * Created by PhpStorm.
 * User: wilder17
 * Date: 23/06/18
 * Time: 16:24
 */

require 'TimeTravel.php';

$timeTravel = new TimeTravel(new DateTime('1985-12-31'), new DateTime());

$timeStep = 10**9;
$interval = new DateInterval('PT' . $timeStep . 'S');
$arrivalDate = $timeTravel->findDate($interval);

echo 'Doc est parti à la date du: ' . ($timeTravel->getStart()->format('d-m-Y')) . '<br/>' . '<br/>';

echo 'Doc a été projeté à la date du: ' . ($arrivalDate->format('d-m-Y')) . '<br/>' . '<br/>';

$timeTravel->setEnd($arrivalDate);

echo $timeTravel->getTravelInfo() . '<br/>' . '<br/>';

$jump = new DateInterval('P1M8D');
$step = new DatePeriod($timeTravel->getEnd(), $jump, $timeTravel->getStart());

$steps = $timeTravel->backToFutureStepByStep($step);

foreach ($steps as $key => $step) {
    echo 'Etape ' . ($key + 1) . ' : ' . $step . '<br/>';
}

