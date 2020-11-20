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
use Ulid\Ulid;

/**
 * Universally Unique Lexicographically Sortable ID identity.
 */
class UlidIdentity extends AbstractIdentity
{
    private const ULID_LENGTH = 26;

    /**
     * {@inheritdoc}
     *
     * @throws InvalidIdentityException
     */
    final public static function fromString(string $value)
    {
        if (\strlen($value) !== static::ULID_LENGTH) {
            throw new InvalidIdentityException(
                \sprintf('Provided identity value "%s" is not a valid ULID.', $value)
            );
        }

        try {
            Ulid::fromString($value);
        } catch (\Exception $exception) {
            throw new InvalidIdentityException(
                \sprintf('Provided identity value "%s" is not a valid ULID.', $value),
                0,
                $exception
            );
        }

        return new static($value);
    }
}
