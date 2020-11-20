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

use Gears\Identity\AbstractIdentity;
use Gears\Identity\Exception\InvalidIdentityException;
use MongoDB\BSON\ObjectId;
use MongoDB\Driver\Exception\InvalidArgumentException;

/**
 * Mongo ObjectId identity.
 */
class ObjectIdIdentity extends AbstractIdentity
{
    /**
     * {@inheritdoc}
     *
     * @throws InvalidIdentityException
     */
    final public static function fromString(string $value)
    {
        try {
            new ObjectId($value);
        } catch (InvalidArgumentException $exception) {
            throw new InvalidIdentityException(
                \sprintf('Provided identity value "%s" is not a valid Mongo ObjectId.', $value),
                0,
                $exception
            );
        }

        return new static($value);
    }
}
