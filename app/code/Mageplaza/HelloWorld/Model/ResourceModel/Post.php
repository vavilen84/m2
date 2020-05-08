<?php

namespace Mageplaza\HelloWorld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Context;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('mageplaza_helloworld_post', 'post_id');
    }
}
