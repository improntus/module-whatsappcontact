<?php
/**
 * @author Improntus Dev Team
 * @copyright Copyright (c) 2026 Improntus (http://www.improntus.com/)
 */
declare(strict_types=1);

namespace Improntus\WhatsappContact\Block\Adminhtml\System\Config\Form;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Module\ModuleListInterface;
use Magento\Framework\View\Asset\Repository;

/**
 * Renders the extension credits row on top of the Whatsapp Contact configuration section.
 *
 * @author Improntus <https://www.improntus.com> - Elevating Digital Experience | Adobe Gold Solution Partner
 * @copyright Copyright (c) 2026 Improntus
 */
class Version extends Field
{
    private const MODULE_NAME = 'Improntus_WhatsappContact';

    /**
     * @var ModuleListInterface
     */
    protected $_moduleList;

    /**
     * @var Repository
     */
    private $_repo;

    /**
     * @param Context $context
     * @param ModuleListInterface $moduleList
     * @param Repository $repository
     * @param array $data
     */
    public function __construct(
        Context $context,
        ModuleListInterface $moduleList,
        Repository $repository,
        array $data = []
    ) {
        $this->_moduleList = $moduleList;
        $this->_repo = $repository;

        parent::__construct($context, $data);
    }

    /**
     * Render version field considering request parameter
     *
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element): string
    {
        return $this->getModuleInfoHtml();
    }

    /**
     * Receive extension information html
     *
     * @return string
     */
    public function getModuleInfoHtml(): string
    {
        $moduleVersion = $this->escapeHtml($this->getVersion());

        $logoImage = $this->getAssetUrl('images/developed-by-dark.png');
        $adobeGoldPartnerImage = $this->getAssetUrl('images/Adobe_Solution_Partner_Gold.png');
        $adobeSilverTechPartnerImage = $this->getAssetUrl('images/Adobe_Technology_Partner_badge_Silver.png');

        return '<tr>
            <td class="label" colspan="4" style="text-align: left;">
                <div style="padding:10px;background-color:#f8f8f8;border:1px solid #ddd;margin-bottom:7px;">
                    <a href="https://commercemarketplace.adobe.com/improntus-whatsappcontact.html">
                        Free Whatsapp Contact
                    </a> integration. <strong>Version</strong>:
                    <strong>' . $moduleVersion . '</strong>
                    <br>
                    <br>
                    <a href="https://improntus.com/">
                        <img src="' . $logoImage . '" alt="Improntus" width="170px">
                    </a>
                    <a href="https://partners.adobe.com/s/directory/solution/improntus#expertise">
                        <img src="' . $adobeGoldPartnerImage . '" alt="Adobe Gold Solution Partner" style="
                            width: 170px;
                            filter: invert(1);
                            margin-left: 30px;">
                    </a>
                    <a href="https://partners.adobe.com/s/directory/technology/Improntus">
                        <img src="' . $adobeSilverTechPartnerImage . '" alt="Adobe Silver Technology Partner" style="
                            width: 145px;
                            margin-left: 30px;">
                    </a>
                </div>
                </td>
            </tr>';
    }

    /**
     * Retrieve the declared setup version of the module
     *
     * @return string
     */
    public function getVersion(): string
    {
        $module = $this->_moduleList->getOne(self::MODULE_NAME);

        return (string)($module['setup_version'] ?? '');
    }

    /**
     * Resolve the escaped public URL of a module view asset
     *
     * @param string $path
     * @return string
     */
    private function getAssetUrl(string $path): string
    {
        return $this->escapeUrl($this->_repo->createAsset(self::MODULE_NAME . '::' . $path)->getUrl());
    }
}
