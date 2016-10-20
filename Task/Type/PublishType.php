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
