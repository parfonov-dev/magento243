<?php

namespace Training\TestOM\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    private $testOM;

    public function __construct(
        \Training\TestOM\Model\Test $testOM
    ) {
        $this->testOM = $testOM;
    }

    public function execute()
    {
        $this->testOM->log();
        exit();
    }
}
