<?php

namespace Vendor\Module\Model;

use Magento\Framework\Model\AbstractModel;

class Example extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Sebweo\Helloworld\Model\Resource\Example');
    }
}