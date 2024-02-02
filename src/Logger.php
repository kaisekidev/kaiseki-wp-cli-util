<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

class Logger
{
    public function __construct(private readonly Colorizer $colorizer)
    {
    }

    public function log(string $message): void
    {
        \WP_CLI::log($message);
    }

    public function success(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        $prefix = $this->colorizer->toGreen("Success:");
        \WP_CLI::log("{$indentString}✅ {$prefix} {$message}");
    }

    public function warning(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        $prefix = $this->colorizer->toYellow("Warning:");
        \WP_CLI::log("{$indentString}❌ {$prefix} {$message}");
    }

    public function error(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        $prefix = $this->colorizer->toRed("Error:");
        \WP_CLI::log("{$indentString}⚠️ {$prefix} {$message}");
    }

    private function getIndentString(bool $indent): string
    {
        return $indent ? '↳   ' : '';
    }
}
