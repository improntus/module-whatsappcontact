<?php

namespace Improntus\WhatsappContact\Block;

use Magento\Framework\View\Element\Template;
use Improntus\WhatsappContact\Helper\Data;

/**
 * Class Redes
 *
 * @author Improntus <http://www.improntus.com> - Ecommerce done right
 * @copyright Copyright (c) 2022 Improntus
 */
class WhatsApp extends Template
{
    /**
     * @var Data
     */
    protected $_helper;

    /**
     * WhatsApp constructor.
     * @param Template\Context $context
     * @param array $data
     * @param Data $helper
     */
    public function __construct(
        Template\Context $context,
        array $data = [],
        Data $helper
    )
    {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_helper->isEnabled();
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->_helper->getNumber();
    }

    /**
     * @return string
     */
    public function getPopUpText()
    {
        return $this->_helper->getPopUpText();
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->_helper->getMessageText();
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->_helper->getPosition();
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->_helper->getCountryCode();
    }
}
