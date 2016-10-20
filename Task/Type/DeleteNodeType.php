<?php

/*
 * This file is part of the phlexible element task package.
 *
 * (c) Stephan Wentz <sw@brainbits.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
