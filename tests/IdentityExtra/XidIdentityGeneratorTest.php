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
use Gears\Identity\Extra\XidIdentityGenerator;
use PHPUnit\Framework\TestCase;

/**
 * Globally Unique ID identity generator test.
 */
class XidIdentityGeneratorTest extends TestCase
{
    public function testGeneration(): void
    {
        $identity = (new XidIdentityGenerator())->generate();

        static::assertInstanceOf(XidIdentity::class, $identity);
    }
}
