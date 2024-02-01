<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\CliUtil;

final class ConfigProvider
{
    /**
     * @return array<mixed>
     */
    public function __invoke(): array
    {
        return [
            'cli_util' => [
                'feature_notice' => 'wp-cli-util',
            ],
            'hook' => [
                'provider' => [
                    FeatureName::class,
                ],
            ],
            'dependencies' => [
                'aliases' => [],
                'factories' => [
                    FeatureName::class => FeatureNameFactory::class,
                ],
            ],
        ];
    }
}
