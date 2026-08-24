<?php
/**
 * @author Improntus Dev Team
 * @copyright Copyright (c) 2026 Improntus (http://www.improntus.com/)
 */
declare(strict_types=1);

namespace Improntus\WhatsappContact\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Screen corners available for the Whatsapp Contact floating button.
 *
 * @author Improntus <http://www.improntus.com> - Adobe Gold Partner - Elevating digital experience
 * @copyright Copyright (c) 2026 Improntus
 */
class Position implements OptionSourceInterface
{
    /**
     * Options to select
     *
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
