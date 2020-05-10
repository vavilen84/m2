<?php

namespace Mageplaza\HelloWorld\Controller\Index;

class Example extends \Magento\Framework\App\Action\Action
{
    protected $title;

    public function execute()
    {
        $this->setTitle('Welcome');
        echo $this->getTitle();
    }

    public function setTitle(string $title)
    {
        echo __METHOD__ . "</br>";
        var_dump($title);die;
        $this->title = "from" . $title;
        //return $this->title = $title;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
}
