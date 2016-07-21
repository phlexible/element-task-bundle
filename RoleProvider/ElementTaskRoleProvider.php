<?php
/**
 * phlexible
 *
 * @copyright 2007-2013 brainbits GmbH (http://www.brainbits.net)
 * @license   proprietary
 */

namespace Phlexible\Bundle\ElementTaskBundle\RoleProvider;

use Phlexible\Bundle\GuiBundle\Security\RoleProvider\RoleProvider;

/**
 * Element task role provider
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class ElementTaskRoleProvider extends RoleProvider
{
    /**
     * {@inheritdoc}
     */
    public function provideRoles()
    {
        return [
            'ROLE_ELEMENT_TASKS',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function provideRoleHierarchy()
    {
        return [
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function exposeRoles()
    {
        return array_keys($this->provideRoleHierarchy());
    }
}
