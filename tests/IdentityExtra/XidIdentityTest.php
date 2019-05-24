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

        $this->assertSame($xid, $stub->getValue());
        $this->assertSame($xid, (string) $stub);
    }

    /**
     * @expectedException \Gears\Identity\Exception\InvalidIdentityException
     * @expectedExceptionMessage Provided identity value "invalidXid" is not a valid Xid
     */
    public function testInvalidXid(): void
    {
        XidIdentity::fromString('invalidXid');
    }
}
