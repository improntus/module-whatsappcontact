<?php
/**
 * @author Improntus Dev Team
 * @copyright Copyright (c) 2026 Improntus (http://www.improntus.com/)
 */
declare(strict_types=1);

namespace Improntus\WhatsappContact\Block;

use Improntus\WhatsappContact\Helper\Data;
use Magento\Framework\View\Element\Template;

/**
 * Exposes the Whatsapp Contact configuration to the storefront template.
 *
 * @author Improntus <http://www.improntus.com> - Adobe Gold Partner - Elevating digital experience
 * @copyright Copyright (c) 2026 Improntus
 */
class WhatsApp extends Template
{
    /**
     * @var Data
     */
    protected $_helper;

    /**
     * @param Template\Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * Check whether the Whatsapp Contact button is enabled for the current store.
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->_helper->isEnabled();
    }

    /**
     * Retrieve the configured Whatsapp phone number.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->_helper->getNumber();
    }

    /**
     * Retrieve the configured phone country code.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->_helper->getCountryCode();
    }

    /**
     * Retrieve the text rendered inside the call to action popup.
     *
     * @return string
     */
    public function getPopUpText(): string
    {
        return $this->_helper->getPopUpText();
    }

    /**
     * Retrieve the message prefilled in the Whatsapp conversation.
     *
     * @return string
     */
    public function getMessageText(): string
    {
        return $this->_helper->getMessageText();
    }

    /**
     * Retrieve the screen corner where the popup is displayed.
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->_helper->getPosition();
    }

    /**
     * Build the api.whatsapp.com URL used by the floating button.
     *
     * @return string
     */
    public function getWhatsappUrl(): string
    {
        $phone = preg_replace('/\D+/', '', $this->getCountryCode() . $this->getNumber());
        $params = ['phone' => (string)$phone];

        if ($this->getMessageText() !== '') {
            $params['text'] = $this->getMessageText();
        }

        return 'https://api.whatsapp.com/send?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
    }
}
