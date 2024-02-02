<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

class Logger
{
    public function log(string $message): void
    {
        \WP_CLI::log($message);
    }

    public function logSuccess(string $message): void
    {
        \WP_CLI::success("✅ " . $message);
    }

    public function logError(string $message): void
    {
        \WP_CLI::error("❌ " . $message);
    }
}
