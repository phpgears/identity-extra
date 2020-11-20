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

use Fpay\Xid\Exception as XidException;
use Fpay\Xid\Generator;
use Gears\Identity\AbstractIdentity;
use Gears\Identity\Exception\InvalidIdentityException;

/**
 * Globally Unique ID identity.
 */
class XidIdentity extends AbstractIdentity
{
    /**
     * {@inheritdoc}
     *
     * @throws InvalidIdentityException
     */
    final public static function fromString(string $value)
    {
        try {
            Generator::fromString($value);
        } catch (XidException $exception) {
            throw new InvalidIdentityException(
                \sprintf('Provided identity value "%s" is not a valid Xid.', $value),
                0,
                $exception
            );
        }

        return new static($value);
    }
}
