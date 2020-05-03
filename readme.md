# Laravel BNR exchange rate
Web Service to retrieve the exchange rate NBR

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Build Status][ico-build]][link-build]
[![Code Style](https://github.com/andalisolutions/laravel-bnr/workflows/Code%20Style/badge.svg)](https://github.com/andalisolutions/laravel-bnr/actions?query=workflow%3A%22Code+Style%22)

[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
## Installation

Via Composer

``` bash
$ composer require andalisolutions/laravel-bnr
```

## Usage
```php
use Andali\Bnr\Facades\Bnr;

$nbrEUR = Bnr::exchange('EUR', '2020-03-04');
or
$nbrEUR = Bnr::exchange('EUR');
```
Response
```
4.8057
```

## Changelog

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
./vendor/bin/phpunit test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email <andrei.ciungulete@andali.ro> instead of using the issue tracker.

## Credits

- [Andrei Ciungulete][link-author]
- [All Contributors][link-contributors]

## License

Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/andalisolutions/laravel-bnr.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/andalisolutions/laravel-bnr.svg?style=flat-square
[ico-build]: https://github.com/andalisolutions/laravel-bnr/workflows/tests/badge.svg
[ico-styleci]: https://styleci.io/repos/253283210/shield
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/andalisolutions/laravel-bnr.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/andalisolutions/laravel-bnr
[link-downloads]: https://packagist.org/packages/andalisolutions/laravel-bnr
[link-build]: https://github.com/andalisolutions/laravel-bnr/actions
[link-styleci]: https://styleci.io/repos/253283210
[link-scrutinizer]: https://scrutinizer-ci.com/g/andalisolutions/laravel-bnr
[link-author]: https://github.com/andalisolutions
[link-contributors]: ../../contributors
