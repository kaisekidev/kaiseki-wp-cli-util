<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

use WP_CLI;

class Logger
{
    public const INDENT = '↳   ';

    public function __construct(private readonly Colorizer $colorizer)
    {
    }

    public function log(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        WP_CLI::log($indentString . $message);
    }

    public function start(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        $prefix = $this->colorizer->toCyan("Start:");
        WP_CLI::log("{$indentString}👉 {$prefix} {$message}");
    }

    public function success(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        $prefix = $this->colorizer->toGreen("Success:");
        WP_CLI::log("{$indentString}✅ {$prefix} {$message}");
    }

    public function warning(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        $prefix = $this->colorizer->toYellow("Warning:");
        WP_CLI::log("{$indentString}❌ {$prefix} {$message}");
    }

    public function error(string $message, bool $indent = false): void
    {
        $indentString = $this->getIndentString($indent);
        $prefix = $this->colorizer->toRed("Error:");
        WP_CLI::log("{$indentString}⚠️ {$prefix} {$message}");
    }

    private function getIndentString(bool $indent): string
    {
        return $indent ? self::INDENT : '';
    }
}
