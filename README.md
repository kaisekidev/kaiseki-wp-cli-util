# kaiseki/wp-cli-util

Small helpers for building [WP-CLI](https://wp-cli.org/) commands: colorized output, structured
logging, and timers.

## Installation

```bash
composer require kaiseki/wp-cli-util
```

Requires PHP 8.2+ and a WP-CLI runtime (the classes call `WP_CLI`).

## Components

### Colorizer

Named wrappers around `WP_CLI::colorize()` — foreground colors, bright variants, backgrounds, and styles:

```php
use Kaiseki\WordPress\WpCli\Util\Colorizer;

$c = new Colorizer();
echo $c->toGreen('done');
echo $c->toRedBright('failed');
echo $c->toBackgroundYellow('note');
```

### Logger

Formatted log lines (built on `Colorizer`) with colored, emoji-prefixed levels and optional indentation:

```php
use Kaiseki\WordPress\WpCli\Util\Logger;

$log = new Logger(new Colorizer());
$log->start('Importing posts');
$log->info('Found 120 items', indent: true);
$log->success('Done');
$log->warning('Skipped 3');
$log->error('Could not connect');
```

### Timer / TimerBuilder

Elapsed and per-interval timing with human-readable formatting:

```php
use Kaiseki\WordPress\WpCli\Util\TimerBuilder;

$timer = (new TimerBuilder())->make();
$timer->startTimer();
// … work …
echo $timer->getElapsedTimeString();  // e.g. "1m 12s"

$timer->addInterval();
// … more work …
echo $timer->getIntervalTimeString(); // time since the last interval
```

## Development

```bash
composer install
composer check   # cs-check, phpstan
```

## License

MIT — see [LICENSE](LICENSE).
