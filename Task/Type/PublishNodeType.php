<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\Task\Type;

/**
 * Publish node task type
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class PublishNodeType extends AbstractNodeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'element_tasks.publish_node';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredParameters()
    {
        return array('id', 'language');
    }

    /**
     * {@inheritdoc}
     */
    public function getRole()
    {
        return 'ROLE_ELEMENT_PUBLISH';
    }

    /**
     * {@inheritdoc}
     */
    protected function getSummaryKey()
    {
        return 'element_tasks.publish_node_template';
    }
}
