[![PHP version](https://img.shields.io/badge/PHP-%3E%3D7.1-8892BF.svg?style=flat-square)](http://php.net)
[![Latest Version](https://img.shields.io/packagist/v/phpgears/identity-extra.svg?style=flat-square)](https://packagist.org/packages/phpgears/identity-extra)
[![License](https://img.shields.io/github/license/phpgears/identity-extra.svg?style=flat-square)](https://github.com/phpgears/identity-extra/blob/master/LICENSE)

[![Build Status](https://img.shields.io/travis/phpgears/identity-extra.svg?style=flat-square)](https://travis-ci.org/phpgears/identity-extra)
[![Style Check](https://styleci.io/repos/188494857/shield)](https://styleci.io/repos/188494857)
[![Code Quality](https://img.shields.io/scrutinizer/g/phpgears/identity-extra.svg?style=flat-square)](https://scrutinizer-ci.com/g/phpgears/identity-extra)
[![Code Coverage](https://img.shields.io/coveralls/phpgears/identity-extra.svg?style=flat-square)](https://coveralls.io/github/phpgears/identity-extra)

[![Total Downloads](https://img.shields.io/packagist/dt/phpgears/identity-extra.svg?style=flat-square)](https://packagist.org/packages/phpgears/identity-extra/stats)
[![Monthly Downloads](https://img.shields.io/packagist/dm/phpgears/identity-extra.svg?style=flat-square)](https://packagist.org/packages/phpgears/identity-extra/stats)

# Identity Extra

Non UUID based identity objects for PHP

This package extends [phpgears/identity](https://github.com/phpgears/identity) to provide non UUID identities, head over there to know more

## Installation

### Composer

```
composer require phpgears/identity-extra
```

## Usage

Require composer autoload file

```php
require './vendor/autoload.php';
```

#### Mongo ObjectId

You need to install and enable ext-mongodb through your distro's repos or PECL

```
sudo pecl install mongodb
```

```php
use Gears\Identity\Extra\ObjectIdIdentity;
use MongoDB\BSON\ObjectId;

$identity = ObjectIdIdentity::fromString((string) new ObjectId());
```

#### ULID (Universally Unique Lexicographically Sortable Identifier)

you need to require https://github.com/robinvdvleuten/php-ulid

```
composer require obinvdvleuten/ulid
```

```php
use Gears\Identity\Extra\UlidIdentity;
use Ulid\Ulid;

$identity = UlidIdentity::fromString((string) Ulid::generate());
```

Find more information about ULID at https://github.com/ulid/spec

#### KSUID (K-Sortable Globally Unique IDs)

you need to require https://github.com/tuupola/ksuid

```
composer require tuupola/ksuid
```

```php
use Gears\Identity\Extra\KsuidIdentity;
use Tuupola\KsuidFactory;

$identity = KsuidIdentity::fromString((string) KsuidFactory::create());
```

Find more information about KSUID at https://github.com/segmentio/ksuid

#### Xid (Globally Unique ID)

you need to require https://github.com/fpay/xid-php

```
composer require fpay/xid-php
```

```php
use Gears\Identity\Extra\XidIdentity;
use Fpay\Xid\Generator;

$identity = XidIdentity::fromString((string) Generator::create());
```

Find more information about Xid at https://github.com/fpay/xid-php

## Contributing

Found a bug or have a feature request? [Please open a new issue](https://github.com/phpgears/identity-extra/issues). Have a look at existing issues before.

See file [CONTRIBUTING.md](https://github.com/phpgears/identity-extra/blob/master/CONTRIBUTING.md)

## License

See file [LICENSE](https://github.com/phpgears/identity-extra/blob/master/LICENSE) included with the source code for a copy of the license terms.
