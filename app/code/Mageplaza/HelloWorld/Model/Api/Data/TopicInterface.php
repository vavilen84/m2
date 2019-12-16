<?php

namespace Mageplaza\HelloWorld\Model\Api\Data;
interface TopicInterface
{
    public function getId();

    public function setId($value);

    public function getTitle();

    public function setTitle();

    public function getContent();

    public function setContent();

    public function getCreationTime();

    public function setCreationTime();
}