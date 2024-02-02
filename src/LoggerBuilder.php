<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

class LoggerBuilder
{
    public function make(): Logger
    {
        return new Logger();
    }
}
