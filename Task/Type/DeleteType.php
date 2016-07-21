<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\Task\Type;

/**
 * Delete element task type
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
