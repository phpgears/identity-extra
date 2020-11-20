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

namespace Gears\Identity\Extra\Tests;

use Gears\Identity\Exception\InvalidIdentityException;
use Gears\Identity\Extra\XidIdentity;
use PHPUnit\Framework\TestCase;

/**
 * Globally Unique ID identity test.
 */
class XidIdentityTest extends TestCase
{
    public function testFromString(): void
    {
        $xid = 'bjk1hgk14qm51s88m3pg';
        $stub = XidIdentity::fromString($xid);

        static::assertSame($xid, $stub->getValue());
    }

    public function testInvalidXid(): void
    {
        $this->expectException(InvalidIdentityException::class);
        $this->expectExceptionMessage('Provided identity value "invalidXid" is not a valid Xid.');

        XidIdentity::fromString('invalidXid');
    }
}
