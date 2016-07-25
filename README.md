# cve/naming-convention-converter

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

This library ships with simple naming convention converters.

## Install

Via Composer

``` bash
$ composer require cve/naming-convention-converter
```

## Usage

``` php
use Cve\Naming\Validator\Argument;
use Cve\Naming\Converter\CamelCaseToUnderscore;
use Cve\Naming\Converter\UnderscoreToCamelCase;

$validator = new Argument();

$camelCaseToUnderscoreConverter = new CamelCaseToUnderscore($validator);
$underscoreToCamelCaseConverter = new UnderscoreToCamelCase($validator);

// CamelCase --> camel_case

$underscore =  $camelCaseToUnderscoreConverter->convert('CamelCase');

// underscore_convention --> UderscoreConvention

$camelCase = $underscoreToCamelCaseConverter->convert('underscore_convention');
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits

- [cve][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/cve/naming-convention-converter.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cve/naming-convention-converter/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cve/naming-convention-converter.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/cve/naming-convention-converter
[link-travis]: https://travis-ci.org/cve/naming-convention-converter
[link-downloads]: https://packagist.org/packages/cve/naming-convention-converter
[link-author]: https://github.com/cve
