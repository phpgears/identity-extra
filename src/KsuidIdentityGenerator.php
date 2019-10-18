<?php

/*
 * identity-extra (https://github.com/phpgears/identity-extra).
 * Identity objects for PHP.
 *
 * @license MIT
 * @link https://github.com/phpgears/identity-extra
 * @author Julián Gutiérrez <juliangut@gmail.com>
 */

declare(strict_types=1);

namespace Gears\Identity\Extra;

use Gears\Identity\IdentityGenerator;
use Tuupola\KsuidFactory;

/**
 * K-Sortable Globally Unique IDs identity generator.
 */
class KsuidIdentityGenerator implements IdentityGenerator
{
    /**
     * {@inheritdoc}
     *
     * @return KsuidIdentity
     */
    public function generate()
    {
        return KsuidIdentity::fromString((string) KsuidFactory::create());
    }
}
