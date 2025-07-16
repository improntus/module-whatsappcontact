<?php
/**
 * @author Improntus Dev Team
 * @copyright Copyright (c) 2025 Improntus (http://www.improntus.com/)
 */
namespace Improntus\WhatsappContact\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 *
 * @author Improntus <http://www.improntus.com> - Adobe Gold Partner - Elevating digital experience
 * @copyright Copyright (c) 2025 Improntus
 */
class Data extends AbstractHelper
{
    /**
     * Data constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return (bool)$this->scopeConfig->getValue('improntus_whatsappcontact/configuration/enable', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->scopeConfig->getValue('improntus_whatsappcontact/configuration/number', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->scopeConfig->getValue('improntus_whatsappcontact/configuration/contry_code', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getPopUpText()
    {
        return $this->scopeConfig->getValue('improntus_whatsappcontact/configuration/popup_text', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->scopeConfig->getValue('improntus_whatsappcontact/configuration/message_text', ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->scopeConfig->getValue('improntus_whatsappcontact/configuration/position', ScopeInterface::SCOPE_STORE);
    }
}
