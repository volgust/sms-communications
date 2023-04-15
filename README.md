<small>For assignment details and requirements please see [ASSIGNMENT](ASSIGNMENT.md).</small>

# Laravel SMS Communications

[![Code Style](https://github.com/FmTod/sms-communications/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/FmTod/sms-communications/actions/workflows/fix-php-code-style-issues.yml)
[![PHPStan](https://github.com/FmTod/sms-communications/actions/workflows/phpstan.yml/badge.svg)](https://github.com/FmTod/sms-communications/actions/workflows/phpstan.yml)
[![Tests](https://github.com/FmTod/sms-communications/actions/workflows/run-tests.yml/badge.svg)](https://github.com/FmTod/sms-communications/actions/workflows/run-tests.yml)
[![Code Coverage](https://codecov.io/gh/FmTod/sms-communications/branch/main/graph/badge.svg?token=fkcMGB5AZ5)](https://codecov.io/gh/FmTod/sms-communications)

## Installation

You can install the package via composer:

```bash
composer require fmtod/sms-communications
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="sms-communications-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="sms-communications-config"
```

This is the contents of the published config file:

```php
return [
    // ToDo
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="sms-communications-views"
```

## Usage

```php
// ToDo
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Mikhail](https://github.com/FmTod)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
