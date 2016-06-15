<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle;

use Phlexible\Bundle\MessageBundle\Entity\Message;

/**
 * Element task message
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class ElementTaskMessage extends Message
{
    /**
     * {@inheritdoc}
     */
    public static function getDefaultChannel()
    {
        return 'element';
    }

    /**
     * {@inheritdoc}
     */
    public static function getDefaultRole()
    {
        return 'ROLE_ELEMENTS';
    }
}