<?php
include "StopWatch.php";
$stopwatch = new StopWatch();
$numbers = [];
for ($i = 0; $i < 100000; $i++) {
    $numbers[$i] = rand(1, 100000);
}
$stopwatch->start();
sort($numbers);
$stopwatch->stop();
echo $stopwatch->getElapsedTime();

