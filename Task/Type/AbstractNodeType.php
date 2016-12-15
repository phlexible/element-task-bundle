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

use Phlexible\Bundle\TaskBundle\Entity\Task;
use Phlexible\Bundle\TaskBundle\Task\Type\TypeInterface;
use Phlexible\Bundle\TreeBundle\Model\TreeNodeInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Abstract element task type.
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
abstract class AbstractNodeType implements TypeInterface
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @return TranslatorInterface
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getRole()
    {
        return 'ROLE_ELEMENTS';
    }

    /**
     * {@inheritdoc}
     */
    public function createPayload($payload)
    {
        if (!$payload instanceof TreeNodeInterface) {
            throw new \InvalidArgumentException('Payload has to be tree node.');
        }

        return array('id' => $payload->getId());
    }

    /**
     * {@inheritdoc}
     */
    public function createSummary($title)
    {
        return $this->translator->trans($this->getSummaryKey(), [], 'gui', 'en');
    }

    /**
     * {@inheritdoc}
     */
    public function createDescription($description)
    {
        return $description;
    }

    /**
     * {@inheritdoc}
     */
    public function createLink(Task $task)
    {
        return 'bla';
    }

    /**
     * {@inheritdoc}
     */
    public function createMenuHandle(Task $task)
    {
        return 'bla';
    }

    /*
     * Return associative array for placeholder replacement
     *
     * @return array
     */
        /*
    protected function _getTextKeys()
    {
        $textKeys = parent::_getTextKeys();

        if (empty($this->_payload['tid'])) {
            return $textKeys;
        }

        $tid = $this->_payload['tid'];
        $version = !empty($this->_payload['version']) ? $this->_payload['version'] : null;
        $language = !empty($this->_payload['language']) ? $this->_payload['language'] : 'de';

        $treeManager = Makeweb_Elements_Tree_Manager::getInstance();
        $elementVersionManager = Makeweb_Elements_Element_Version_Manager::getInstance();

        try {
            $node = $treeManager->getNodeByNodeId($tid);
            $eid = $node->getEid();

            if ($version !== null) {
                $elementVersion = $elementVersionManager->get($eid, $version);
            } else {
                $elementVersion = $elementVersionManager->getLatest($eid);
            }

            $textKeys['title'] = $elementVersion->getBackendTitle($language);
        } catch (Exception $e) {
            $textKeys['title'] = '(Title unknown)' . $e->getMessage();
        }
        $textKeys = array();

        return $textKeys;
    }
        */

    /*
     * Return the task link
     *
     * @return array
     */
        /*
    protected function _getLink()
    {
        if (empty($this->_payload['tid'])) {
            return null;
        }

        $container = MWF_Registry::get('container');

        $language = $container->getParameter('phlexible_cms.languages.default');
        if (!empty($this->_payload['language'])) {
            $language = $this->_payload['language'];
        }

        $tid = $this->_payload['tid'];

        $node = Makeweb_Elements_Tree_Manager::getInstance()->getNodeByNodeId($tid);
        $siteRoot = $node->getTree()->getSiteRoot();

        $menuItem = new MWF_Core_Menu_Item_Panel();
        $menuItem->setPanel('Makeweb.elements.MainPanel')
            ->setIdentifier('Makeweb_elements_MainPanel_' . $siteRoot->getTitle($language))
            ->setParam('id', $tid)
            ->setParam('siteroot_id', $siteRoot->getId())
            ->setParam('title', $siteRoot->getTitle())
            ->setParam('start_tid_path', '/' . implode('/', $node->getPath()));

        $menuItem = array();

        return $menuItem;
    }
        */
}
