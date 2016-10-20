<?php

/*
 * This file is part of the phlexible element task package.
 *
 * (c) Stephan Wentz <sw@brainbits.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
