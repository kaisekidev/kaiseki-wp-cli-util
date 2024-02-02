<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\WpCli\Util;

final class ConfigProvider
{
    /**
     * @return array<mixed>
     */
    public function __invoke(): array
    {
        return [
            'hook' => [
                'provider' => [],
            ],
            'dependencies' => [
                'aliases' => [],
                'factories' => [],
            ],
        ];
    }
}
