<?php

namespace Improntus\WhatsappContact\Block\Adminhtml\System\Config\Form;

use Magento\Framework\Module\ModuleListInterface;

/**
 * Class Version
 *
 * @author Improntus <https://www.improntus.com> - Elevating Digital Experience | Adobe Gold Solution Partner
 * @copyright Copyright (c) 2025 Improntus
 * @package Improntus\WhatsappContact\Block\Adminhtml\System\Config\Form
 */
class Version extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var ModuleListInterface
     */
    protected $_moduleList;

    /**
     * @var Magento\Framework\View\Asset\Repository|\Magento\Framework\View\Asset\Repository
     */
    private $_repo;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param ModuleListInterface $moduleList
     * @param Magento\Framework\View\Asset\Repository $repository
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        ModuleListInterface $moduleList,
        \Magento\Framework\View\Asset\Repository $repository,
        array $data = []
    ) {
        $this->_moduleList = $moduleList;
        $this->_repo = $repository;

        parent::__construct($context, $data);
    }

    /**
     * Render version field considering request parameter
     *
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->getModuleInfoHtml();
    }

    /**
     * Receive extension information html
     *
     * @return string
     */
    public function getModuleInfoHtml()
    {
        $moduleVersion = $this->getVersion();

        $logoImage = $this->_repo->createAsset('Improntus_WhatsappContact::images/developed-by-dark.png')->getUrl();;
        $adobeGoldPartnerImage = $this->_repo->createAsset('Improntus_WhatsappContact::images/Adobe_Solution_Partner_Gold.png')->getUrl();;
        $adobeSilverTechPartnerImage = $this->_repo->createAsset('Improntus_WhatsappContact::images/Adobe_Technology_Partner_badge_Silver.png')->getUrl();;

        return '<tr>
            <td class="label" colspan="4" style="text-align: left;">
                <div style="padding:10px;background-color:#f8f8f8;border:1px solid #ddd;margin-bottom:7px;">
                    <a href="https://commercemarketplace.adobe.com/improntus-whatsappcontact.html">Free Whatsapp Contact</a> integration. <strong>Version</strong>:
                    <strong>' . $moduleVersion . '</strong>
                    <br>
                    <br>
                    <a href="https://improntus.com/">
                        <img src="'.$logoImage.'" alt="Improntus" width="170px">
                    </a>
                    <a href="https://partners.adobe.com/s/directory/solution/improntus#expertise">
                        <img src="'.$adobeGoldPartnerImage.'" alt="Adobe Gold Solution Partner" style="
                            width: 170px;
                            filter: invert(1);
                            margin-left: 30px;">
                    </a>
                    <a href="https://partners.adobe.com/s/directory/technology/Improntus">
                        <img src="'.$adobeSilverTechPartnerImage.'" alt="Adobe Silver Technology Partner" style="
                            width: 145px;
                            margin-left: 30px;">
                    </a>
                </div>
                </td>
            </tr>';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->_moduleList->getOne('Improntus_WhatsappContact')['setup_version'];
    }
}
