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
use MongoDB\BSON\ObjectId;

/**
 * Mongo ObjectId identity generator.
 */
class ObjectIdIdentityGenerator implements IdentityGenerator
{
    /**
     * {@inheritdoc}
     *
     * @return ObjectIdIdentity
     */
    public function generate()
    {
        return ObjectIdIdentity::fromString((string) new ObjectId());
    }
}
