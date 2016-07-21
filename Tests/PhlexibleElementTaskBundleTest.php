<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\Tests;

use Phlexible\Bundle\ElementTaskBundle\PhlexibleElementTaskBundle;

/**
 * Element task bundle test
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class PhlexibleElementTaskBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBundle()
    {
        $bundle = new PhlexibleElementTaskBundle();

        $this->assertSame('PhlexibleElementTaskBundle', $bundle->getName());
    }
}
