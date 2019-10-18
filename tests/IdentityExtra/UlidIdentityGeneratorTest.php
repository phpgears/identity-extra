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
use Gears\Identity\Extra\UlidIdentityGenerator;
use PHPUnit\Framework\TestCase;

/**
 * Universally Unique Lexicographically Sortable ID identity generator test.
 */
class UlidIdentityGeneratorTest extends TestCase
{
    public function testGeneration(): void
    {
        $identity = (new UlidIdentityGenerator())->generate();

        static::assertInstanceOf(UlidIdentity::class, $identity);
    }
}
