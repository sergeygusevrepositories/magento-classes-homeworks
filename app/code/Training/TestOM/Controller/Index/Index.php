<?php

namespace Training\TestOM\Controller\Index;

class Index implements \Magento\Framework\App\ActionInterface
{
    private $playWithTest;

    public function __construct(
        \Training\TestOM\Model\PlayWithTest $playWithTest
    ) {
        $this->playWithTest = $playWithTest;
    }

    public function execute()
    {
        $this->playWithTest->run();
        exit;
    }
}
