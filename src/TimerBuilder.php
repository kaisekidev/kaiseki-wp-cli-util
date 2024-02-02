<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

class TimerBuilder
{
    public function make(): Timer
    {
        return new Timer();
    }
}
