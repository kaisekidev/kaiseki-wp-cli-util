<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

use function ceil;
use function end;
use function floor;
use function implode;
use function microtime;

class Timer
{
    private float $startTime;
    /** @var list<float> */
    private array $interims = [];

    public function startTimer(): void
    {
        $this->startTime = microtime(true);
    }

    public function getStartTime(): float
    {
        return $this->startTime;
    }

    public function getElapsedTime(): float
    {
        return microtime(true) - $this->startTime;
    }

    public function getElapsedTimeString(): string
    {
        return $this->secondsToTime($this->getElapsedTime());
    }

    public function addInterval(): void
    {
        $this->interims[] = microtime(true);
    }

    public function getIntervalTime(): float
    {
        return $this->interims !== []
            ? microtime(true) - end($this->interims)
            : $this->getElapsedTime();
    }

    public function getIntervalTimeString(): string
    {
        return $this->secondsToTime($this->getIntervalTime());
    }

    protected function secondsToTime(float $inputSeconds): string
    {
        if ($inputSeconds < 1) {
            return floor($inputSeconds * 100) . 'ms';
        }
        $secondsInAMinute = 60;
        $secondsInAnHour = 60 * $secondsInAMinute;
        $secondsInADay = 24 * $secondsInAnHour;

        // Extract days
        $days = floor($inputSeconds / $secondsInADay);

        // Extract hours
        $hourSeconds = $inputSeconds % $secondsInADay;
        $hours = floor($hourSeconds / $secondsInAnHour);

        // Extract minutes
        $minuteSeconds = $hourSeconds % $secondsInAnHour;
        $minutes = floor($minuteSeconds / $secondsInAMinute);

        // Extract the remaining seconds
        $remainingSeconds = $minuteSeconds % $secondsInAMinute;
        $seconds = ceil($remainingSeconds);

        // Format and return
        $timeParts = [];
        $sections = [
            'd' => (int)$days,
            'h' => (int)$hours,
            'm' => (int)$minutes,
            's' => (int)$seconds,
        ];

        foreach ($sections as $name => $value) {
            if ($value <= 0) {
                continue;
            }

            $timeParts[] = $value . $name;
        }

        return implode(' ', $timeParts);
    }
}
