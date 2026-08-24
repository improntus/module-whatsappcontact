<?php
/**
 * @author Improntus Dev Team
 * @copyright Copyright (c) 2026 Improntus (http://www.improntus.com/)
 */
declare(strict_types=1);

namespace Improntus\WhatsappContact\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Provides access to the Whatsapp Contact store configuration.
 *
 * @author Improntus <http://www.improntus.com> - Adobe Gold Partner - Elevating digital experience
 * @copyright Copyright (c) 2026 Improntus
 */
class Data extends AbstractHelper
{
    public const XML_PATH_ENABLE = 'improntus_whatsappcontact/configuration/enable';
    public const XML_PATH_NUMBER = 'improntus_whatsappcontact/configuration/number';
    public const XML_PATH_COUNTRY_CODE = 'improntus_whatsappcontact/configuration/contry_code';
    public const XML_PATH_POPUP_TEXT = 'improntus_whatsappcontact/configuration/popup_text';
    public const XML_PATH_MESSAGE_TEXT = 'improntus_whatsappcontact/configuration/message_text';
    public const XML_PATH_POSITION = 'improntus_whatsappcontact/configuration/position';

    /**
     * Check whether the Whatsapp Contact button is enabled for the current store.
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Retrieve the configured Whatsapp phone number.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->getConfigValue(self::XML_PATH_NUMBER);
    }

    /**
     * Retrieve the configured phone country code.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->getConfigValue(self::XML_PATH_COUNTRY_CODE);
    }

    /**
     * Retrieve the text rendered inside the call to action popup.
     *
     * @return string
     */
    public function getPopUpText(): string
    {
        return $this->getConfigValue(self::XML_PATH_POPUP_TEXT);
    }

    /**
     * Retrieve the message prefilled in the Whatsapp conversation.
     *
     * @return string
     */
    public function getMessageText(): string
    {
        return $this->getConfigValue(self::XML_PATH_MESSAGE_TEXT);
    }

    /**
     * Retrieve the screen corner where the popup is displayed.
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->getConfigValue(self::XML_PATH_POSITION);
    }

    /**
     * Read a store scoped configuration value as a string.
     *
     * @param string $path
     * @return string
     */
    private function getConfigValue(string $path): string
    {
        return (string)$this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }
}
