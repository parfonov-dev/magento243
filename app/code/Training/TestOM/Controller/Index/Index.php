<?php

namespace Training\TestOM\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    private $testOM;
    private $playWithTest;

    public function __construct(
        \Training\TestOM\Model\Test $testOM,
        \Training\TestOM\Model\PlayWithTest $playWithTest
    ) {
        $this->testOM = $testOM;
        $this->playWithTest = $playWithTest;
    }

    public function execute()
    {
        $this->playWithTest->run();
        exit();
    }
}
