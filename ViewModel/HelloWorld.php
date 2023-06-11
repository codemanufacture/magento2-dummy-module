<?php

declare(strict_types=1);

namespace Codemanufacture\DummyMagentoModule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class HelloWorld implements ArgumentInterface
{
    /**
     * Returns a message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return (string) __('Hello World');
    }
}