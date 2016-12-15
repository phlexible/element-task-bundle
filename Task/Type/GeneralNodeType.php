<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\Task\Type;

/**
 * General node task type
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class GeneralNodeType extends AbstractNodeType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'element_tasks.general_node';
    }

    /**
     * Get required parameters for this task
     *
     * @return array
     */
    public function getRequiredParameters()
    {
        return array('id');
    }

    /**
     * {@inheritdoc}
     */
    protected function getSummaryKey()
    {
        return 'elements_tasks.general_node_template';
    }
}
