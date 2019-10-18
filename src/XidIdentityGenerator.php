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

use Fpay\Xid\Generator;
use Gears\Identity\IdentityGenerator;

/**
 * Globally Unique ID identity generator.
 */
class XidIdentityGenerator implements IdentityGenerator
{
    /**
     * {@inheritdoc}
     *
     * @return XidIdentity
     */
    public function generate()
    {
        return XidIdentity::fromString((string) Generator::create());
    }
}
