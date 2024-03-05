<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

use WP_CLI;

class Colorizer
{
    protected function colorize(string $message, string $color): string
    {
        return WP_CLI::colorize("%{$color}{$message}%n");
    }

    public function toYellow(string $message): string
    {
        return $this->colorize($message, 'y');
    }

    public function toGreen(string $message): string
    {
        return $this->colorize($message, 'g');
    }

    public function toBlue(string $message): string
    {
        return $this->colorize($message, 'b');
    }

    public function toRed(string $message): string
    {
        return $this->colorize($message, 'r');
    }

    public function toMagenta(string $message): string
    {
        return $this->colorize($message, 'm');
    }

    public function toCyan(string $message): string
    {
        return $this->colorize($message, 'c');
    }

    public function toGrey(string $message): string
    {
        return $this->colorize($message, 'w');
    }

    public function toBlack(string $message): string
    {
        return $this->colorize($message, 'k');
    }

    public function toYellowBright(string $message): string
    {
        return $this->colorize($message, 'Y');
    }

    public function toGreenBright(string $message): string
    {
        return $this->colorize($message, 'G');
    }

    public function toBlueBright(string $message): string
    {
        return $this->colorize($message, 'B');
    }

    public function toRedBright(string $message): string
    {
        return $this->colorize($message, 'R');
    }

    public function toMagentaBright(string $message): string
    {
        return $this->colorize($message, 'M');
    }

    public function toCyanBright(string $message): string
    {
        return $this->colorize($message, 'C');
    }

    public function toGreyBright(string $message): string
    {
        return $this->colorize($message, 'W');
    }

    public function toBlackBright(string $message): string
    {
        return $this->colorize($message, 'K');
    }

    public function toBackgroundYellow(string $message): string
    {
        return $this->colorize($message, '3');
    }

    public function toBackgroundGreen(string $message): string
    {
        return $this->colorize($message, '2');
    }

    public function toBackgroundBlue(string $message): string
    {
        return $this->colorize($message, '4');
    }

    public function toBackgroundRed(string $message): string
    {
        return $this->colorize($message, '1');
    }

    public function toBackgroundMagenta(string $message): string
    {
        return $this->colorize($message, '5');
    }

    public function toBackgroundCyan(string $message): string
    {
        return $this->colorize($message, '6');
    }

    public function toBackgroundGrey(string $message): string
    {
        return $this->colorize($message, '7');
    }

    public function toBackgroundBlack(string $message): string
    {
        return $this->colorize($message, '0');
    }

    public function toStyleBlink(string $message): string
    {
        return $this->colorize($message, 'F');
    }

    public function toStyleUnderline(string $message): string
    {
        return $this->colorize($message, 'U');
    }

    public function toStyleInverse(string $message): string
    {
        return $this->colorize($message, '8');
    }

    public function toStyleBright(string $message): string
    {
        return $this->colorize($message, '9');
    }
}
