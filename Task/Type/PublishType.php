<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\Task\Type;

/**
 * Publish element task type
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class PublishType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'element.publish';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredParameters()
    {
        return array('type', 'type_id', 'language');
    }

    /**
     * {@inheritdoc}
     */
    public function getRole()
    {
        return 'ROLE_ELEMENT_PUBLISH';
    }

    /**
     * @return string
     */
    protected function getTitleKey()
    {
        return 'elements.task_publish_element';
    }

    /**
     * @return string
     */
    protected function getTextKey()
    {
        return 'elements.task_publish_element_template';
    }
}
