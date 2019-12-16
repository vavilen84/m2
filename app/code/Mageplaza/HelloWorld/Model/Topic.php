<?php

namespace Mageplaza\HelloWorld\Model;

class Topic extends \Magento\Framework\Model\AbstractModel implements
    \Magento\Framework\DataObject\IdentityInterface,
    \Mageplaza\HelloWorld\Model\Api\Data\TopicInterface
{
    const CACHE_TAG = 'mageplaza_topic';

    protected function _construct()
    {
        $this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Topic');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getId(){}

    public function setId($value){}

    public function getTitle(){}

    public function setTitle(){}

    public function getContent(){}

    public function setContent(){}

    public function getCreationTime(){}

    public function setCreationTime(){}
}