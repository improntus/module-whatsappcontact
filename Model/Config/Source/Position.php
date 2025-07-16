<?php
namespace Improntus\WhatsappContact\Model\Config\Source;

/**
 * Class Position
 *
 * @author Improntus <http://www.improntus.com> - Adobe Gold Partner - Elevating digital experience
 * @copyright Copyright (c) 2025 Improntus
 */
class Position implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * Options to select
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'bottom-right', 'label' => __('Bottom - Right')],
            ['value' => 'bottom-left', 'label' => __('Bottom - Left')],
            ['value' => 'top-right', 'label' => __('Top - Right')],
            ['value' => 'top-left', 'label' => __('Top - Left')]
        ];
    }
}
