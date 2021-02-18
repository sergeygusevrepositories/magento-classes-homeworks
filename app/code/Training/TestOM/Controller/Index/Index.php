<?php

namespace Training\TestOM\Controller\Index;

class Index implements \Magento\Framework\App\ActionInterface
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
        exit;
    }
}
