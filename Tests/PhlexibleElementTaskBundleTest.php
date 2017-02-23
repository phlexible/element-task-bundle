<?php

/*
 * This file is part of the phlexible element task package.
 *
 * (c) Stephan Wentz <sw@brainbits.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phlexible\Bundle\ElementTaskBundle\Tests;

use Phlexible\Bundle\ElementTaskBundle\PhlexibleElementTaskBundle;
use PHPUnit\Framework\TestCase;

/**
 * Element task bundle test.
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class PhlexibleElementTaskBundleTest extends TestCase
{
    public function testBundle()
    {
        $bundle = new PhlexibleElementTaskBundle();

        $this->assertSame('PhlexibleElementTaskBundle', $bundle->getName());
    }
}
