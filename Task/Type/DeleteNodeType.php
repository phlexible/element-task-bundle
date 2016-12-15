<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\Task\Type;

/**
 * Delete node task type
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class DeleteNodeType extends AbstractNodeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'element_tasks.delete_node';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredParameters()
    {
        return array('id');
    }

    /**
     * {@inheritdoc}
     */
    public function getRole()
    {
        return 'ROLE_ELEMENT_DELETE';
    }

    /**
     * {@inheritdoc}
     */
    protected function getSummaryKey()
    {
        return 'element_tasks.delete_node_template';
    }
}
