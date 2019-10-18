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
use Ulid\Ulid;

/**
 * Universally Unique Lexicographically Sortable ID identity generator.
 */
class UlidIdentityGenerator implements IdentityGenerator
{
    /**
     * {@inheritdoc}
     *
     * @return UlidIdentity
     */
    public function generate()
    {
        return UlidIdentity::fromString((string) Ulid::generate());
    }
}
