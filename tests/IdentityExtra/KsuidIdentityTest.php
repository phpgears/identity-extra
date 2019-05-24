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

use Gears\Identity\Extra\KsuidIdentity;
use PHPUnit\Framework\TestCase;

/**
 * K-Sortable Globally Unique IDs identity test.
 */
class KsuidIdentityTest extends TestCase
{
    public function testFromString(): void
    {
        $ksuid = '1LgaE8DYkQTCv9V4ssXNLOacjhf';
        $stub = KsuidIdentity::fromString($ksuid);

        $this->assertSame($ksuid, $stub->getValue());
        $this->assertSame($ksuid, (string) $stub);
    }

    /**
     * @expectedException \Gears\Identity\Exception\InvalidIdentityException
     * @expectedExceptionMessage Provided identity value "invalidKSUID" is not a valid KSUID
     */
    public function testInvalidKsuid(): void
    {
        KsuidIdentity::fromString('invalidKSUID');
    }
}