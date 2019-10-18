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
use Gears\Identity\Extra\KsuidIdentityGenerator;
use PHPUnit\Framework\TestCase;

/**
 * K-Sortable Globally Unique IDs identity generator test.
 */
class KsuidIdentityGeneratorTest extends TestCase
{
    public function testGeneration(): void
    {
        $identity = (new KsuidIdentityGenerator())->generate();

        static::assertInstanceOf(KsuidIdentity::class, $identity);
    }
}
