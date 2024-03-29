# Laravel BNR exchange rate

[![Latest Version on Packagist](https://img.shields.io/packagist/v/andalisolutions/laravel-bnr.svg)](https://packagist.org/packages/andalisolutions/laravel-bnr)
![Tests](https://github.com/andalisolutions/laravel-bnr/workflows/Tests/badge.svg)
[![PHPStan](https://github.com/andalisolutions/laravel-bnr/actions/workflows/phpstan.yml/badge.svg)](https://github.com/andalisolutions/laravel-bnr/actions/workflows/phpstan.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/andalisolutions/laravel-bnr.svg)](https://packagist.org/packages/andalisolutions/laravel-bnr)


## Installation

You can install the package via composer:

```bash
composer require andalisolutions/laravel-bnr
```

## Usage

The exchange value is in RON.
```php
use Andali\Bnr\Bnr;


BNR::exchange('EUR')->today();
/* OR */
BNR::exchange('EUR')->in('2022-07-20')

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/andalisolutions/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Andrei Ciungulete](https://github.com/ciungulete)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
