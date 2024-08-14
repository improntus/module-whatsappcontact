<?php
/**
 * @author Improntus Dev Team
 * @copyright Copyright (c) 2023 Improntus (http://www.improntus.com/)
 */
namespace Improntus\WhatsappContact\Model\Config\Source;

/**
 * Class Position
 *
 * @author Improntus <http://www.improntus.com> - Ecommerce done right
 * @copyright Copyright (c) 2024 Improntus
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
