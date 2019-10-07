<?php
include "StopWatch.php";
$stopwatch = new StopWatch();
$numbers = [];
for ($i = 0; $i < 100000; $i++) {
    $numbers[$i] = rand(1, 100000);
}
$stopwatch->start();
echo $stopwatch->get_startTime();
echo "<br>";
sort($numbers);
$stopwatch->stop();
echo $stopwatch->get_endTime();
echo "<br>";
echo $stopwatch->getElapsedTime();

