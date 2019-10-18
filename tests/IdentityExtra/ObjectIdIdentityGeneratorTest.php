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
use Gears\Identity\Extra\ObjectIdIdentityGenerator;
use PHPUnit\Framework\TestCase;

/**
 * Mongo ObjectId identity generator test.
 */
class ObjectIdIdentityGeneratorTest extends TestCase
{
    public function testGeneration(): void
    {
        $identity = (new ObjectIdIdentityGenerator())->generate();

        static::assertInstanceOf(ObjectIdIdentity::class, $identity);
    }
}
