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

use Gears\Identity\Extra\UlidIdentity;
use PHPUnit\Framework\TestCase;

/**
 * Universally Unique Lexicographically Sortable ID identity test.
 */
class UlidIdentityTest extends TestCase
{
    public function testFromString(): void
    {
        $ulid = '01DBNARX8ZQQWR3XDTJBY9K0CN';
        $stub = UlidIdentity::fromString($ulid);

        $this->assertSame($ulid, $stub->getValue());
        $this->assertSame($ulid, (string) $stub);
    }

    /**
     * @expectedException \Gears\Identity\Exception\InvalidIdentityException
     * @expectedExceptionMessage Provided identity value "invalidULID" is not a valid ULID
     */
    public function testInvalidUlid(): void
    {
        UlidIdentity::fromString('invalidULID');
    }
}
