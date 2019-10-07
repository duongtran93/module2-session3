<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    public function get_startTime()
    {
        return $this->startTime;
    }

    public function get_endTime()
    {
        return $this->endTime;
    }

    public function __construct()
    {
        $this->startTime;
    }

    public function start()
    {
        $this->startTime = round(microtime(true) * 1000);
    }

    public function stop()
    {
        $this->endTime = round(microtime(true) * 1000);
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}