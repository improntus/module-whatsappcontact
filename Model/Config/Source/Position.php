<?php
namespace Improntus\WhatsappContact\Model\Config\Source;

/**
 * Class Position
 *
 * @author Improntus <http://www.improntus.com> - Ecommerce done right
 * @copyright Copyright (c) 2020 Improntus
 * @package Improntus\WhatsappContact\Model\Config\Source
 */
class Position implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'bottom-right', 'label' => __('Bottom - Right')],
            ['value' => 'bottom-left', 'label' => __('Bottom - Left')],
            ['value' => 'top-right', 'label' => __('Top - Right')],
            ['value' => 'top-left', 'label' => __('Top - Left')]
        ];
    }
}
