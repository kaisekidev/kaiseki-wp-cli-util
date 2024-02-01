<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\CliUtil;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;

final class FeatureNameFactory
{
    public function __invoke(ContainerInterface $container): FeatureName
    {
        $config = Config::get($container);
        return new FeatureName(
            $config->string('cli_util/feature_notice')
        );
    }
}
