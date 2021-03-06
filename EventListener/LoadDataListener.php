<?php

/*
 * This file is part of the phlexible element task package.
 *
 * (c) Stephan Wentz <sw@brainbits.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phlexible\Bundle\ElementTaskBundle\EventListener;

use Phlexible\Bundle\ElementBundle\Event\LoadDataEvent;
use Phlexible\Bundle\TaskBundle\Entity\Task;
use Phlexible\Bundle\TaskBundle\Model\TaskManagerInterface;
use Phlexible\Bundle\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Load data listener.
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class LoadDataListener
{
    /**
     * @var TaskManagerInterface
     */
    private $taskManager;

    /**
     * @var UserManagerInterface
     */
    private $userManager;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * @param TaskManagerInterface  $taskManager
     * @param UserManagerInterface  $userManager
     * @param TokenStorageInterface $tokenStorage
     */
    public function __construct(
        TaskManagerInterface $taskManager,
        UserManagerInterface $userManager,
        TokenStorageInterface $tokenStorage
    ) {
        $this->taskManager = $taskManager;
        $this->userManager = $userManager;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @param LoadDataEvent $event
     */
    public function onLoadData(LoadDataEvent $event)
    {
        if ($teaser = $event->getTeaser()) {
            $taskPayload = ['teaser_id' => $teaser->getId(), 'language' => $event->getLanguage()];
        } else {
            $taskPayload = ['tree_id' => $event->getNode()->getId(), 'language' => $event->getLanguage()];
        }

        $task = $this->taskManager->findOneByPayload(
            $taskPayload,
            [
                Task::STATUS_OPEN,
                Task::STATUS_REJECTED,
                Task::STATUS_REOPENED,
                Task::STATUS_FINISHED,
            ]
        );

        if (!$task) {
            unset($taskPayload['language']);

            $task = $this->taskManager->findOneByPayload(
                $taskPayload,
                [
                    Task::STATUS_OPEN,
                    Task::STATUS_REJECTED,
                    Task::STATUS_REOPENED,
                    Task::STATUS_FINISHED,
                ]
            );
        }

        if (!$task) {
            return;
        }

        /* @var $task Task */

        $createUserId = $task->getCreateUserId();
        $assignedUserId = $task->getAssignedUserId();
        $currentUserId = $this->tokenStorage->getToken()->getUser()->getId();

        $type = '';
        if ($task->getAssignedUserId() === $currentUserId) {
            $type = 'assigned_to_me';
        } elseif ($task->getCreateUserId() === $currentUserId) {
            $type = 'created_by_me';
        }

        $taskInfo = [
            'id' => $task->getId(),
            'status' => $task->getFiniteState(),
            'type' => $type,
            'generic' => 0, // $task->isGeneric() ? 1 : 0, @TODO
            'text' => 'test', //$task->getTitle(),
            'creator' => $this->userManager->find($createUserId)->getDisplayName(),
            'recipient' => $this->userManager->find($assignedUserId)->getDisplayName(),
            'date' => $task->getCreatedAt()->format('Y-m-d'),
            'time' => $task->getCreatedAt()->format('H:i:s'),
        ];

        $event->getData()->task = $taskInfo;
    }
}
