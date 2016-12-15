<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\Task\Type;

/**
 * Set node offline task type
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class SetNodeOfflineType extends AbstractNodeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'element_tasks.set_node_offline';
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
        return 'elements.task_set_element_offline_template';
    }
}
