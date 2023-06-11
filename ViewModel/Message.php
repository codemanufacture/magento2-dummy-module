<?php

declare(strict_types=1);

namespace Codemanufacture\DummyMagentoModule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Message implements ArgumentInterface
{
    /**
     * Another message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return 'Message';
    }
}