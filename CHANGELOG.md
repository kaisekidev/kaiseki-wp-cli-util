# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 1.0.0 - 2026-05-29

First tagged release.

### Added

- `Colorizer` — named wrappers around `WP_CLI::colorize()` (colors, bright variants, backgrounds, styles).
- `Logger` — formatted WP-CLI log lines (start/success/warning/error/info) with colored, emoji prefixes and optional indentation.
- `Timer` / `TimerBuilder` — elapsed and per-interval timing with human-readable formatting.

### Changed

- PHP requirement is `^8.2` (PHP 8.4 is the primary target).
- Modernized the dev toolchain (PHPStan 2 + phpstan-wordpress 2, PHPUnit 11, composer-require-checker 4)
  and depend on `kaiseki/php-coding-standard: ^1.0` with the shared PHPStan config; CI runs via the
  reusable workflow in `kaisekidev/.github`.
