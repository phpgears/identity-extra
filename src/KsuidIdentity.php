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
use Tuupola\Ksuid;
use Tuupola\KsuidFactory;

/**
 * K-Sortable Globally Unique IDs identity.
 */
class KsuidIdentity extends AbstractIdentity
{
    /**
     * {@inheritdoc}
     *
     * @throws InvalidIdentityException
     */
    final public static function fromString(string $value)
    {
        if (\strlen($value) !== Ksuid::ENCODED_SIZE) {
            throw new InvalidIdentityException(
                \sprintf('Provided identity value "%s" is not a valid KSUID', $value)
            );
        }

        try {
            KsuidFactory::fromString($value);
        } catch (\Exception $exception) {
            throw new InvalidIdentityException(
                \sprintf('Provided identity value "%s" is not a valid KSUID', $value),
                0,
                $exception
            );
        }

        return new static($value);
    }
}
