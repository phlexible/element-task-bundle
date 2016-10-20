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
 * Delete element task type.
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class DeleteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'element.delete';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredParameters()
    {
        return array('type', 'type_id');
    }

    /**
     * {@inheritdoc}
     */
    public function getRole()
    {
        return 'ROLE_ELEMENT_DELETE';
    }

    /**
     * @return string
     */
    protected function getTitleKey()
    {
        return 'elements.task_delete_element';
    }

    /**
     * @return string
     */
    protected function getTextKey()
    {
        return 'elements.task_delete_element_template';
    }
}
