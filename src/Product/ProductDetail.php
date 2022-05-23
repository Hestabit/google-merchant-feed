<?php

namespace Hestabit\GoogleMerchant\Product;

use Hestabit\GoogleMerchant\HasProperties;

/**
 * Describes product's specific shipping rules
 *
 * @see https://support.google.com/merchants/answer/6324484
 */
class ProductDetail
{
    use HasProperties;

    public function setSection($section,$attribute,$attributeValue)
    {
        $this->setAttribute('section_name', $section, false);
        $this->setAttribute('attribute_name', $attribute, false);
        $this->setAttribute('attribute_value', $attributeValue, false);
        return $this;
    }
}
