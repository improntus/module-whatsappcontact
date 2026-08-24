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
 * @author Improntus <https://www.improntus.com> - Elevating Digital Experience | Adobe Gold Partner
 * @copyright Copyright (c) 2026 Improntus
 */
class Version extends Field
{
    private const MODULE_NAME = 'Improntus_WhatsappContact';

    /**
     * @param Context $context
     * @param ModuleListInterface $moduleList
     * @param Repository $assetRepository
     * @param array $data
     */
    public function __construct(
        Context $context,
        private readonly ModuleListInterface $moduleList,
        private readonly Repository $assetRepository,
        array $data = []
    ) {
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
            <td class="label improntus-version-cell" colspan="4">
                <div class="improntus-version-row">
                    <a href="https://commercemarketplace.adobe.com/improntus-whatsappcontact.html">
                        Free Whatsapp Contact
                    </a> integration. <strong>Version</strong>:
                    <strong>' . $moduleVersion . '</strong>
                    <br>
                    <br>
                    <a href="https://improntus.com/">
                        <img src="' . $logoImage . '" alt="Improntus" class="improntus-logo">
                    </a>
                    <a href="https://partners.adobe.com/s/directory/solution/improntus#expertise">
                        <img src="' . $adobeGoldPartnerImage . '" alt="Adobe Gold Solution Partner" class="partner-badge partner-badge--gold">
                    </a>
                    <a href="https://partners.adobe.com/s/directory/technology/Improntus">
                        <img src="' . $adobeSilverTechPartnerImage . '" alt="Adobe Silver Technology Partner" class="partner-badge partner-badge--silver">
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
        $module = $this->moduleList->getOne(self::MODULE_NAME);

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
        return $this->escapeUrl($this->assetRepository->createAsset(self::MODULE_NAME . '::' . $path)->getUrl());
    }
}
