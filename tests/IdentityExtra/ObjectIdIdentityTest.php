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

use Gears\Identity\Extra\ObjectIdIdentity;
use PHPUnit\Framework\TestCase;

/**
 * Mongo ObjectId identity test.
 */
class ObjectIdIdentityTest extends TestCase
{
    public function testFromString(): void
    {
        $mongoId = '5ce87cd5355b6c68ca0abd70';
        $stub = ObjectIdIdentity::fromString($mongoId);

        $this->assertSame($mongoId, $stub->getValue());
        $this->assertSame($mongoId, (string) $stub);
    }

    /**
     * @expectedException \Gears\Identity\Exception\InvalidIdentityException
     * @expectedExceptionMessage Provided identity value "invalidMongoObjectId" is not a valid Mongo ObjectId
     */
    public function testInvalidMongoId(): void
    {
        ObjectIdIdentity::fromString('invalidMongoObjectId');
    }
}